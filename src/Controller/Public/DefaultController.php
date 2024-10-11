<?php

namespace App\Controller\Public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
  
  #[Route(path:"/", name:"")]
  public function index(Request $request) : Response
  {
    return $this->render("home.html.twig", [
      "name"  =>  "Homepage"
    ]);
  }

}