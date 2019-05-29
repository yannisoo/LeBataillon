const express = require('express')
const jwt = require('jsonwebtoken')
const router = express.Router()
const User = require('../models/user')
const mongoose = require('mongoose')
const jwtUtilis  = require('../utilis/jwt.utilis');

const db = "mongodb+srv://bilal:bilal@cluster0-a45bb.mongodb.net/test?retryWrites=true"

mongoose.connect(db, err => {

  if (err){

    console.error('Error!' + err)

  }else{

    console.log('Connected to mongodb !')

  }

})

function verifyToken(req,res,next){
   if (!req.headers.authorization){

      return res.status(401).send('Unauthorized request')
    }
      let token = req.headers.authorization.split(' ')[1]

      if(token === 'null'){

        return res.status(401).send('Unauthorized request')
   }
        let payload = jwt.verify(token, 'secretKey')
  if(!payload){

    return res.status(401).send('Unauthorized request')
  }
  req.userId = payload.subject
  next()

}


router.get('/' , (req , res) => {

  res.send('bilal vien de crée un server priver pour stocker ses donner et les recuperer via une api pour alimenter son projet angular')

})

router.post('/register' , (req, res) =>{

 let userData = req.body
 let user = new User(userData)
 user.save((error, registeredUser) => {

 if (error){
   console.log(error)
 }else{

   let payload = {subject: registeredUser._id}
   let token = jwt.sign(payload,'secretKey')

   res.status(200).send({token})
 }

 })

})

router.post('/login', (req, res) =>{

  let userData = req.body

  User.findOne({email: userData.email}, (error, user) => {
     if (error){
        console.log(error)
    }else{
       if (!user){
           res.status(401).send('invalid email')
       }else
         if (user.password !== userData.password){
        res.status(401).send('invalid password')
       }else{
         let payload = {subject: user._id}
         let token = jwt.sign(payload,'secretKey')

        res.status(200).send({token})
      }
  }

})
})


router.get('/user', (req, res) =>{

  var headerAuth  = req.headers['authorization'];
      var userId      = jwtUtilis.getUserId(headerAuth);

      if (userId < 0)
        return res.status(400).json({ 'error': 'wrong token' });

      User.findOne({
        attributes: [ 'uid', 'email' ],
        where: { id: userId }
      }).then(function(user) {
        if (user) {
          res.status(201).json(user);
        } else {
          res.status(404).json({ 'error': 'user not found' });
        }
      }).catch(function(err) {
        res.status(500).json({ 'error': 'cannot fetch user' });
      });
    })

router.get('/events', (req, res) =>{

    let events = [

       {
          "_id" : "1",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

       {
          "_id" : "2",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

       {
          "_id" : "3",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

    ]

    res.json(events)

})


router.get('/special', verifyToken,(req, res) =>{

    let events = [

       {
          "_id" : "1",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

       {
          "_id" : "2",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

       {
          "_id" : "3",
          "name" : "Auto expo",
          "description" : "lorem ipsum",
          "date" : "2012-04-23T18:25:43.511Z"

       },

    ]

    res.json(events)

})




module.exports = router
