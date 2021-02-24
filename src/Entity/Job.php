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
     * @ORM\Column(type="text")
     */
    private $job_description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $job_missions;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $candidate_profile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $miscellaneous;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity=Company::class, inversedBy="jobs")
     */
    private $company_id;

    /**
     * @ORM\ManyToMany(targetEntity=Duration::class, mappedBy="job_id")
     */
    private $durations;

    /**
     * @ORM\ManyToMany(targetEntity=SkillLevel::class, mappedBy="job_id")
     */
    private $skillLevels;

    /**
     * @ORM\ManyToMany(targetEntity=Technology::class, mappedBy="job_id")
     */
    private $technologies;

    /**
     * @ORM\ManyToMany(targetEntity=Remote::class, mappedBy="job_id")
     */
    private $remotes;

    /**
     * @ORM\OneToMany(targetEntity=Salary::class, mappedBy="job_id")
     */
    private $salaries;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    public function __construct()
    {
        $this->durations = new ArrayCollection();
        $this->skillLevels = new ArrayCollection();
        $this->technologies = new ArrayCollection();
        $this->remotes = new ArrayCollection();
        $this->salaries = new ArrayCollection();
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
        return $this->job_description;
    }

    public function setJobDescription(string $job_description): self
    {
        $this->job_description = $job_description;

        return $this;
    }

    public function getJobMissions(): ?string
    {
        return $this->job_missions;
    }

    public function setJobMissions(?string $job_missions): self
    {
        $this->job_missions = $job_missions;

        return $this;
    }

    public function getCandidateProfile(): ?string
    {
        return $this->candidate_profile;
    }

    public function setCandidateProfile(?string $candidate_profile): self
    {
        $this->candidate_profile = $candidate_profile;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getCompanyId(): ?Company
    {
        return $this->company_id;
    }

    public function setCompanyId(?Company $company_id): self
    {
        $this->company_id = $company_id;

        return $this;
    }

    /**
     * @return Collection|Duration[]
     */
    public function getDurations(): Collection
    {
        return $this->durations;
    }

    public function addDuration(Duration $duration): self
    {
        if (!$this->durations->contains($duration)) {
            $this->durations[] = $duration;
            $duration->addJobId($this);
        }

        return $this;
    }

    public function removeDuration(Duration $duration): self
    {
        if ($this->durations->removeElement($duration)) {
            $duration->removeJobId($this);
        }

        return $this;
    }

    /**
     * @return Collection|SkillLevel[]
     */
    public function getSkillLevels(): Collection
    {
        return $this->skillLevels;
    }

    public function addSkillLevel(SkillLevel $skillLevel): self
    {
        if (!$this->skillLevels->contains($skillLevel)) {
            $this->skillLevels[] = $skillLevel;
            $skillLevel->addJobId($this);
        }

        return $this;
    }

    public function removeSkillLevel(SkillLevel $skillLevel): self
    {
        if ($this->skillLevels->removeElement($skillLevel)) {
            $skillLevel->removeJobId($this);
        }

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
            $technology->addJobId($this);
        }

        return $this;
    }

    public function removeTechnology(Technology $technology): self
    {
        if ($this->technologies->removeElement($technology)) {
            $technology->removeJobId($this);
        }

        return $this;
    }

    /**
     * @return Collection|Remote[]
     */
    public function getRemotes(): Collection
    {
        return $this->remotes;
    }

    public function addRemote(Remote $remote): self
    {
        if (!$this->remotes->contains($remote)) {
            $this->remotes[] = $remote;
            $remote->addJobId($this);
        }

        return $this;
    }

    public function removeRemote(Remote $remote): self
    {
        if ($this->remotes->removeElement($remote)) {
            $remote->removeJobId($this);
        }

        return $this;
    }

    /**
     * @return Collection|Salary[]
     */
    public function getSalaries(): Collection
    {
        return $this->salaries;
    }

    public function addSalary(Salary $salary): self
    {
        if (!$this->salaries->contains($salary)) {
            $this->salaries[] = $salary;
            $salary->setJobId($this);
        }

        return $this;
    }

    public function removeSalary(Salary $salary): self
    {
        if ($this->salaries->removeElement($salary)) {
            // set the owning side to null (unless already changed)
            if ($salary->getJobId() === $this) {
                $salary->setJobId(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
