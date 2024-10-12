<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CMSController extends AbstractController
{
  // #[Route(path:"/dashboard", name:"")]
  #[Route('/dashboard', name: 'app_cms')]
  public function dashboardPage() : Response
  {
    return new Response('This is dashboard');
  } 
}