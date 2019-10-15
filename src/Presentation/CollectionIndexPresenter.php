<?php

namespace App\Presentation;

use App\Repository\PrefectureRepository;
use App\Repository\CollectionRepository;
use App\Presentation\CollectionIndexViewModel;

class CollectionIndexPresenter
{
  public function create(
      PrefectureRepository $prefectureRepository,
      CollectionRepository $collectionRepository,
      int $prefectureId
  ) {
    $vm = new CollectionIndexViewModel();

    $prefecture = $prefectureRepository->findById($prefectureId);

    $vm->prefectureName   = $prefecture->getName();
    $vm->prefectureEnName = $prefecture->getEnName();
    $vm->collections      = $collectionRepository->getCollectionByPrefecture($prefectureId);

    return $vm;
  }
}