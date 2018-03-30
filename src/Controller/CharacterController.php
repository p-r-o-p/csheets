<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController {

  /**
   * @Route("/")
   */
  public function index() {
    return new Response('Hello World!');
  }
}
