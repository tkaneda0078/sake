<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\ManyToOne(targetEntity="Collection", inversedBy="image")
   */
  private $collections;

  /**
   * @ORM\Column(name="location", type="string", length=255, nullable=false, options={"comment":"画像の場所"})
   */
  private $location;

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

  public function getLocation(): ?string
  {
    return $this->location;
  }

  public function setLocation(string $location): self
  {
    $this->location = $location;

    return $this;
  }
}
