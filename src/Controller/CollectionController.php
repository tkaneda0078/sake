<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Prefecture;
use App\Entity\Collection;
use App\Presentation\CollectionIndexPresenter;
use App\Presentation\CollectionDetailPresenter;

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
   * @Route("/collection/detail/{collectionId}", methods={"GET","HEAD"}, name="collectionDetail")
   * @todo エラーハンドリング htaccece
   */
  public function detail($collectionId)
  {
    return $this->render('Collection/detail.html.twig', [
        'vm' => (new CollectionDetailPresenter)->create(
            $this->getDoctrine()->getManager()->getRepository(Collection::class),
            $collectionId
        )
    ]);
  }
}
