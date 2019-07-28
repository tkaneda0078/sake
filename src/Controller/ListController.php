<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ListController extends AbstractController
{
  /**
   * @Route("/list", name="list")
   * @todo presenterとviewmodel作成
   */
  public function index(Request $request)
  {
    $prefCode = $request->query->get('pref-code');
    return $this->render('list/index.html.twig', ['controller_name' => 'ListController',]);
  }
}
