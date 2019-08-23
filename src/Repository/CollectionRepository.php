<?php

namespace App\Repository;

use App\Entity\Collection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Collection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Collection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Collection[]    findAll()
 * @method Collection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollectionRepository extends ServiceEntityRepository
{
  /**
   * CollectionRepository constructor.
   * @param RegistryInterface $registry
   */
  public function __construct(RegistryInterface $registry)
  {
    parent::__construct($registry, Collection::class);
  }

  /**
   * @param int $prefectureId
   * @return Collection
   */
  public function getCollectionByPrefecture(int $prefectureId): Collection
  {
    return $this->findBy([
        'prefecture' => $prefectureId
    ]);
  }
}
