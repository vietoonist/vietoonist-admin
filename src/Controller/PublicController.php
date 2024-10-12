<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
  #[Route(path:"/", name:"")]
  public function renderMainPage() : Response
  {
    dd($this);
  }
}