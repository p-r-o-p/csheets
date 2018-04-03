<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller {

    /**
     * @Route("/login", name="login")
     * @param  Request $request - A request object.
     * @return Response         - A reponse object.
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils) {
      // Get the login error, if any.
      $error = $authenticationUtils->getLastAuthenticationError();

      // Last username entered by the user.
      $lastUserName = $authenticationUtils->getLastUsername();

      return $this->render('security/login.html.twig', [
        'last_username' => $lastUserName,
        'error' => $error,
      ]);
    }

    /**
     * @Route("/signup", name="signup")
     * @param   Request $request  - A request object.
     * @return  Response          - A response object.
     */
    public function signupDisplay(Request $request, AuthenticationUtils $authenticationUtils) {
      // Get the last login error, if any.
      $error = $authenticationUtils->getLastAuthenticationError();

      // Get the last username entered by the user.
      $lastUserName = $authenticationUtils->getLastUsername();

      return $this->render('security/signup.html.twig', [
        'last_username' => $lastUserName,
        'error' => $error,
      ]);
    }
}
