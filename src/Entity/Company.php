<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 */
class Company
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activity_area;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", options={"default"= "CURRENT_TIMESTAMP"})
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slogan;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $frenchOffice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remoteHiring;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $workForce;

    /**
     * @ORM\OneToMany(targetEntity=SocialMedia::class, mappedBy="company")
     */
    private $socialMedia;

    /**
     * @ORM\ManyToMany(targetEntity=CompanyKeywords::class, inversedBy="companies")
     */
    private $keywords;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->socialMedia = new ArrayCollection();
        $this->companyKeywords = new ArrayCollection();
        $this->keywords = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getActivityArea(): ?string
    {
        return $this->activity_area;
    }

    public function setActivityArea(string $activity_area): self
    {
        $this->activity_area = $activity_area;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(?string $slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

    public function getFrenchOffice(): ?string
    {
        return $this->frenchOffice;
    }

    public function setFrenchOffice(?string $frenchOffice): self
    {
        $this->frenchOffice = $frenchOffice;

        return $this;
    }

    public function getRemoteHiring(): ?string
    {
        return $this->remoteHiring;
    }

    public function setRemoteHiring(?string $remoteHiring): self
    {
        $this->remoteHiring = $remoteHiring;

        return $this;
    }

    public function getWorkForce(): ?string
    {
        return $this->workForce;
    }

    public function setWorkForce(?string $workForce): self
    {
        $this->workForce = $workForce;

        return $this;
    }

    /**
     * @return Collection|SocialMedia[]
     */
    public function getSocialMedia(): Collection
    {
        return $this->socialMedia;
    }

    public function addSocialMedium(SocialMedia $socialMedium): self
    {
        if (!$this->socialMedia->contains($socialMedium)) {
            $this->socialMedia[] = $socialMedium;
            $socialMedium->setCompany($this);
        }

        return $this;
    }

    public function removeSocialMedium(SocialMedia $socialMedium): self
    {
        if ($this->socialMedia->removeElement($socialMedium)) {
            // set the owning side to null (unless already changed)
            if ($socialMedium->getCompany() === $this) {
                $socialMedium->setCompany(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CompanyKeywords[]
     */
    public function getKeywords(): Collection
    {
        return $this->keywords;
    }

    public function addKeyword(CompanyKeywords $keyword): self
    {
        if (!$this->keywords->contains($keyword)) {
            $this->keywords[] = $keyword;
        }

        return $this;
    }

    public function removeKeyword(CompanyKeywords $keyword): self
    {
        $this->keywords->removeElement($keyword);

        return $this;
    }
}