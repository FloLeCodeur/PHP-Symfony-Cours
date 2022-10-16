<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
  public function index() {
    var_dump("ça marche");
    die();
  }

  /**
   * @Route("/test/{age>\d+>?0}", name="test")
   */
  public function test(Request $request, $age) {

    // $age = $request->attributes->get('age', 0);

    return new Response("vous avez $age ans");
  }
}