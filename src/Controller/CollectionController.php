<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Prefecture;

class CollectionController extends AbstractController
{
  /**
   * @Route("/collection", methods={"GET","HEAD"}, name="collection")
   * @todo presenterとviewmodel作成
   */
  public function index(Request $request)
  {
    $prefCode = $request->query->get('pref-code');

    $prefectureRepository = $this->getDoctrine()->getManager()->getRepository(Prefecture::class);
    $prefecture = $prefectureRepository->findById($prefCode);

    // todo: DBから酒情報を取得する

    $viewData = [
        'prefName'        => $prefecture->getName(),
        'prefEnName'      => $prefecture->getEnName(),
        'sakeCollections' => $prefectureRepository->findAll()
    ];

    return $this->render('Collection/index.html.twig', $viewData);
  }

  /**
   * @Route("/collection/detail/{id}", methods={"GET","HEAD"}, name="collectionDetail")
   */
  public function detail($id)
  {
    // todo: 酒の詳細を取得する
    $viewData = ['sample' => 22222];

    return $this->render('Collection/detail.html.twig', $viewData);
  }
}
