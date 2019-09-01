<?php

namespace App\Presentation;

use App\Repository\CollectionRepository;
use App\Presentation\CollectionDetailViewModel;

class CollectionDetailPresenter
{
  public function create(CollectionRepository $collectionRepository, int $collectionId) {
    $vm = new CollectionDetailViewModel();

    $collection = $collectionRepository->find($collectionId);

    $vm->name               = $collection->getName();
    $vm->brand              = $collection->getBrand();
    $vm->brewing            = $collection->getBrewing();
    $vm->price              = $collection->getPrice();
    $vm->capacity           = $collection->getCapacity();
    $vm->feature            = $collection->getFeature();
    $vm->type               = $collection->getType();
    $vm->materialRice       = $collection->getMaterialRice();
    $vm->ricePolishingRatio = $collection->getRicePolishingRatio();
    $vm->prefecture         = $collection->getPrefecture()->getName();
    $vm->prefectureEn       = $collection->getPrefecture()->getEnName();

    return $vm;
  }
}