import { Component, OnInit, Input } from '@angular/core';
import {Router} from '@angular/router'
import {AuthService} from '../auth/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.sass']
})
export class LoginComponent implements OnInit {
  @Input('ngModel') loginUserData: any = {};

  constructor(private _auth: AuthService,
              private _router: Router) { }

  ngOnInit() {
  }

  loginUser(){

    // console.log(this.loginUserData)

    this._auth.loginUser(this.loginUserData).subscribe(res => {
        console.log(res)
        localStorage.setItem('token', res.token)
        this._router.navigate(['/'])

      },
     err => console.log(err)

    )

  }

}
