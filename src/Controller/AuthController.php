<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
  // #[Route("/auth", name:"")]
  #[Route('/auth', name: 'app_auth')]
  public function authPage() : Response
  {
    return new Response('This is auth');
  }
}