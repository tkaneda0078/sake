<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Prefecture;
use App\Entity\Collection;
use App\Presentation\CollectionIndexPresenter;

class CollectionController extends AbstractController
{
  /**
   * @Route("/collection", methods={"GET","HEAD"}, name="collection")
   */
  public function index(Request $request)
  {
    $prefectureId = $request->query->get('prefectureId');

    return $this->render('Collection/index.html.twig', [
        'vm' => (new CollectionIndexPresenter)->create(
            $this->getDoctrine()->getManager()->getRepository(Prefecture::class),
            $this->getDoctrine()->getManager()->getRepository(Collection::class),
            $prefectureId
        )
    ]);
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
