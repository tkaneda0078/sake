<?php

namespace App\Repository;

use App\Entity\Prefecture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PrefectureRepository extends ServiceEntityRepository
{
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, Prefecture::class);
  }

  /**
   * @param int $prefCode
   * @return Prefecture
   */
  public function findById(int $prefCode): Prefecture
  {
    return $this->find($prefCode);
  }
}
