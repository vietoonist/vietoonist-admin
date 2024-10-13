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
    return $this->render("home.html.twig", [
      "featured_comics" => array(
        [
          "title" => "Superman",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
        ],
        [
          "title" => "Superman 2",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
        ],
        [
          "title" => "Superman 3",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
        ]
      ),
      "featured_stories" => array(
        [
          "title" => "Sherlock Holmes",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
          "content" => "Why do you care?"
        ],
        [
          "title" => "Sherlock Holmes 2",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
          "content" => "Why do you care?"
        ],
        [
          "title" => "Sherlock Holmes 3",
          "slug" => "",
          "cover_image_url" => "https://img.com",
          "description" => "just a simple story",
          "content" => "Why do you care?"
        ],
      )
    ]);
  }
}