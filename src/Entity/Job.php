<?php

namespace App\Entity;

use App\Repository\JobRepository;
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
     * @ORM\Column(type="string", length=255)
     */
    private $remote;

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

    public function getRemote(): ?string
    {
        return $this->remote;
    }

    public function setRemote(string $remote): self
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
}
