<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Prefecture;

class ListController extends AbstractController
{
  /**
   * @Route("/list", name="list")
   * @todo presenterとviewmodel作成
   */
  public function index(Request $request)
  {
    $prefCode = $request->query->get('pref-code');

    $prefectureRepository = $this->getDoctrine()->getManager()->getRepository(Prefecture::class);
    $prefecture = $prefectureRepository->findById($prefCode);

    // todo: DBから酒情報を取得する

    $viewData = [
        'prefName'   => $prefecture->getName(),
        'prefEnName' => $prefecture->getEnName(),
        'sakeList'   => ['item1', 'item2', 'item3']
    ];

    return $this->render('List/index.html.twig', $viewData);
  }
}
