<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $methodology;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $jobDescription;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $jobMissions;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $candidateProfile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $miscellaneous;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="array", length=255)
     */
    private $remote = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seniority;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $recruiting;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $applyAddress;

    /**
     * @ORM\ManyToOne(targetEntity=Company::class, inversedBy="jobs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contract;

    /**
     * @ORM\ManyToMany(targetEntity=Technology::class, inversedBy="jobs")
     */
    private $technologies;

    /**
     * @ORM\ManyToMany(targetEntity=Stack::class, inversedBy="jobs")
     */
    private $stack;

    /**
     * @ORM\ManyToMany(targetEntity=Position::class, inversedBy="jobs")
     */
    private $position;

    /**
     * @ORM\ManyToMany(targetEntity=Benefit::class, inversedBy="jobs")
     */
    private $perks;

    public function __construct()
    {
        $this->technologies = new ArrayCollection();
        $this->stack = new ArrayCollection();
        $this->position = new ArrayCollection();
        $this->perks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMethodology(): ?string
    {
        return $this->methodology;
    }

    public function setMethodology(?string $methodology): self
    {
        $this->methodology = $methodology;

        return $this;
    }

    public function getJobDescription(): ?string
    {
        return $this->jobDescription;
    }

    public function setJobDescription(?string $jobDescription): self
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    public function getJobMissions(): ?string
    {
        return $this->jobMissions;
    }

    public function setJobMissions(?string $jobMissions): self
    {
        $this->jobMissions = $jobMissions;

        return $this;
    }

    public function getCandidateProfile(): ?string
    {
        return $this->candidateProfile;
    }

    public function setCandidateProfile(?string $candidateProfile): self
    {
        $this->candidateProfile = $candidateProfile;

        return $this;
    }

    public function getMiscellaneous(): ?string
    {
        return $this->miscellaneous;
    }

    public function setMiscellaneous(?string $miscellaneous): self
    {
        $this->miscellaneous = $miscellaneous;

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

    public function getRemote(): ?array
    {
        return $this->remote;
    }

    public function setRemote(array $remote): self
    {
        $this->remote = $remote;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(?string $salary): self
    {
        $this->salary = $salary;

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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getSeniority(): ?string
    {
        return $this->seniority;
    }

    public function setSeniority(?string $seniority): self
    {
        $this->seniority = $seniority;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    public function setSubTitle(?string $subTitle): self
    {
        $this->subTitle = $subTitle;

        return $this;
    }

    public function getRecruiting(): ?string
    {
        return $this->recruiting;
    }

    public function setRecruiting(?string $recruiting): self
    {
        $this->recruiting = $recruiting;

        return $this;
    }

    public function getApplyAddress(): ?string
    {
        return $this->applyAddress;
    }

    public function setApplyAddress(string $applyAddress): self
    {
        $this->applyAddress = $applyAddress;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * @return Collection|Technology[]
     */
    public function getTechnologies(): Collection
    {
        return $this->technologies;
    }

    public function addTechnology(Technology $technology): self
    {
        if (!$this->technologies->contains($technology)) {
            $this->technologies[] = $technology;
        }

        return $this;
    }

    public function removeTechnology(Technology $technology): self
    {
        $this->technologies->removeElement($technology);

        return $this;
    }

    /**
     * @return Collection|Stack[]
     */
    public function getStack(): Collection
    {
        return $this->stack;
    }

    public function addStack(Stack $stack): self
    {
        if (!$this->stack->contains($stack)) {
            $this->stack[] = $stack;
        }

        return $this;
    }

    public function removeStack(Stack $stack): self
    {
        $this->stack->removeElement($stack);

        return $this;
    }

    /**
     * @return Collection|Position[]
     */
    public function getPosition(): Collection
    {
        return $this->position;
    }

    public function addPosition(Position $position): self
    {
        if (!$this->position->contains($position)) {
            $this->position[] = $position;
        }

        return $this;
    }

    public function removePosition(Position $position): self
    {
        $this->position->removeElement($position);

        return $this;
    }

    /**
     * @return Collection|Benefit[]
     */
    public function getPerks(): Collection
    {
        return $this->perks;
    }

    public function addPerk(Benefit $perk): self
    {
        if (!$this->perks->contains($perk)) {
            $this->perks[] = $perk;
        }

        return $this;
    }

    public function removePerk(Benefit $perk): self
    {
        $this->perks->removeElement($perk);

        return $this;
    }
}
