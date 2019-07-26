<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @Route("/home", name="home")
   */
  public function index()
  {
    $message = 'hello world';
    return $this->render('home/index.html.twig', ['message' => $message]);
  }
}
