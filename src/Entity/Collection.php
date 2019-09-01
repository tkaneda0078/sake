<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CollectionRepository")
 */
class Collection
{
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(name="id", type="integer")
   */
  private $id;

  /**
   * @ORM\ManyToOne(targetEntity="Prefecture", inversedBy="collections")
   * @ORM\JoinColumn(nullable=false)
   */
  private $prefecture;

  /**
   * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"comment":"名前"})
   */
  private $name;

  /**
   * @ORM\Column(name="ruby", type="string", length=255, nullable=true, options={"default":null, "comment":"ふりがな"})
   */
  private $ruby;

  /**
   * @ORM\Column(name="brand", type="string", length=255, nullable=true, options={"default":null, "comment":"銘柄"})
   */
  private $brand;

  /**
   * @ORM\Column(name="brewing", type="string", length=255, nullable=true, options={"default":null, "comment":"酒造"})
   */
  private $brewing;

  /**
   * @ORM\Column(name="price", type="string", length=255, nullable=true, options={"default":null, "comment":"価格"})
   */
  private $price;

  /**
   * @ORM\Column(name="feature", type="string", length=255, nullable=true, options={"default":null, "comment":"特徴"})
   */
  private $feature;

  /**
   * @ORM\Column(name="specific_name", type="string", length=20, nullable=true, options={"default":null, "comment":"日本酒の種類"})
   */
  private $specificName;

  /**
   * @ORM\Column(name="material_rice", type="string", length=20, nullable=true, options={"default":null, "comment":"原料米"})
   */
  private $materialRice;

  /**
   * @ORM\Column(name="rice_polishing_ratio", type="string", length=20, nullable=true, options={"default":null, "comment":"精米歩合"})
   */
  private $ricePolishingRatio;

  /**
   * @ORM\Column(name="create_at", type="datetime", options={"default":null})
   */
  private $createAt;

  /**
   * @ORM\Column(name="update_at", type="datetime", options={"default":null})
   */
  private $updateAt;

  /**
   * @ORM\Column(name="delete_at", type="datetime", nullable=true, options={"default":null})
   */
  private $deleteAt;

  public function getId(): int
  {
    return $this->id;
  }

  public function getPrefecture(): Prefecture
  {
    return $this->prefecture;
  }

  public function setPrefecture(Prefecture $prefecture): self
  {
    $this->prefecture = $prefecture;

    return $this;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getRuby(): ?string
  {
    return $this->ruby;
  }

  public function setRuby(?string $ruby): self
  {
    $this->ruby = $ruby;

    return $this;
  }

  public function getBrand(): ?string
  {
    return $this->brand;
  }

  public function setBrand(?string $brand): self
  {
    $this->brand = $brand;

    return $this;
  }

  public function getBrewing(): ?string
  {
    return $this->brewing;
  }

  public function setBrewing(?string $brewing): self
  {
    $this->brewing = $brewing;

    return $this;
  }

  public function getPrice(): ?string
  {
    return $this->price;
  }

  public function setPrice(?string $price): self
  {
    $this->price = $price;

    return $this;
  }

  public function getFeature(): ?string
  {
    return $this->feature;
  }

  public function setFeature(string $feature): self
  {
    $this->feature = $feature;

    return $this;
  }

  public function getSpecificName(): ?string
  {
    return $this->specificName;
  }

  public function setSpecificName(?string $specificName): self
  {
    $this->specificName = $specificName;

    return $this;
  }

  public function getMaterialRice(): ?string
  {
    return $this->materialRice;
  }

  public function setMaterialRice(?string $materialRice): self
  {
    $this->materialRice = $materialRice;

    return $this;
  }

  public function getRicePolishingRatio(): ?string
  {
    return $this->ricePolishingRatio;
  }

  public function setRicePolishingRatio(?string $ricePolishingRatio): self
  {
    $this->ricePolishingRatio = $ricePolishingRatio;

    return $this;
  }

  public function getCreateAt(): ?\DateTimeInterface
  {
    return $this->createAt;
  }

  public function setCreateAt(\DateTimeInterface $createAt): self
  {
    $this->createAt = $createAt;

    return $this;
  }

  public function getUpdateAt(): ?\DateTimeInterface
  {
    return $this->updateAt;
  }

  public function setUpdateAt(\DateTimeInterface $updateAt): self
  {
    $this->updateAt = $updateAt;

    return $this;
  }

  public function getDeleteAt(): ?\DateTimeInterface
  {
    return $this->deleteAt;
  }

  public function setDeleteAt(?\DateTimeInterface $deleteAt): self
  {
    $this->deleteAt = $deleteAt;

    return $this;
  }
}
