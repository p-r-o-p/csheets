<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController {

  /**
   * @Route("/csheet", name="csheet")
   */
  public function csheetDisplay() {
    return new Response("This is a character sheet!");
  }

  /**
   * @Route("/")
   */
  public function index() {
    return new Response("Hello world!");
  }
}
