<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrefectureRepository")
 */
class Prefecture
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\OneToMany(targetEntity="Collection", mappedBy="prefecture")
   */
  private $collections;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $name;

  /**
   * @ORM\Column(type="string", length=255)
   */
  private $en_name;
  
  public function getId(): ?int
  {
    return $this->id;
  }

  public function getCollections(): Collection
  {
    return $this->collections;
  }

  public function setCollections(Collection $collection): self
  {
    $this->collections = $collection;

    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getEnName(): ?string
  {
    return $this->en_name;
  }

  public function setEnName(string $en_name): self
  {
    $this->en_name = $en_name;

    return $this;
  }
}
