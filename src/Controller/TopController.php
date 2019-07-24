<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends AbstractController
{
  /**
   * @Route("/top", name="top")
   */
  public function index()
  {
    $message = 'hello world';
    return $this->render('top/top.html.twig', ['message' => $message]);
  }
}
