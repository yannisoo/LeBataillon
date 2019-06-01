<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Form\UserType;
use App\Form\LoginType;
/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class UserController extends FOSRestController
{
    /**
     * Lists all Pages.
     * @Rest\Get("/users")
     *
     * @return Response
     */
    public function getUserAction()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $pages = $repository->findall();
        return $this->handleView($this->view($pages));
    }

    /**
     * List one Page.
     * @Rest\Get("/users/{id}")
     *
     * @param $id
     * @return Response
     */
    public function getSingleUserAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $pages = $repository->find($id);
        return $this->handleView($this->view($pages));
    }

    /**
     * Create Page.
     * @Rest\Post("/user")
     *
     * @return Response
     */
    public function postUserAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $page = new User();
        $form = $this->createForm(UserType::class, $page);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $hach = $encoder->encodePassword($page, $page->getPassword());
            $page->setPassword($hach);
            $em->persist($page);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * Update Page.
     * @Rest\Put("/userUpdate/{id}")
     *
     * @return Response
     */
    public function UpdatePage(Request $request, User $page)
    {
        $form = $this->createForm(UserType::class, $page);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

    /**
     * Delete User.
     * @Rest\Delete("/userDelete/{id}")
     *
     * @param $id
     * @return Response
     */
    public function DeleteUser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user =  $em->getRepository(User::class)->find($id);

        $em->remove($user);
        $em->flush();

        return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));

    }

    /**

        * @Route("/login")

        */
       public function login()
       {
         // $repository = $this->getDoctrine()->getRepository(User::class);
         // $user = $repository->findAll();


             return $this->render('user/login.html.twig');






           return $this->render('User/login.html.twig');
       }

}
