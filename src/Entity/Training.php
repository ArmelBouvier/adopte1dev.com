<?php

namespace App\Entity;

use App\Repository\TrainingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrainingRepository::class)
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siteName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sponsored;

    /**
     * @ORM\Column(type="array")
     */
    private $category = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $specifications = [];

    /**
     * @ORM\ManyToMany(targetEntity=Technology::class, inversedBy="trainings")
     */
    private $techs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->techs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    public function setSiteName(string $siteName): self
    {
        $this->siteName = $siteName;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSponsored(): ?string
    {
        return $this->sponsored;
    }

    public function setSponsored(string $sponsored): self
    {
        $this->sponsored = $sponsored;

        return $this;
    }

    public function getCategory(): ?array
    {
        return $this->category;
    }

    public function setCategory(array $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSpecifications(): ?array
    {
        return $this->specifications;
    }

    public function setSpecifications(?array $specifications): self
    {
        $this->specifications = $specifications;

        return $this;
    }

    /**
     * @return Collection|Technology[]
     */
    public function getTechs(): Collection
    {
        return $this->techs;
    }

    public function addTech(Technology $tech): self
    {
        if (!$this->techs->contains($tech)) {
            $this->techs[] = $tech;
        }

        return $this;
    }

    public function removeTech(Technology $tech): self
    {
        $this->techs->removeElement($tech);

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
