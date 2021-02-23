<?php

namespace App\Entity;

use App\Repository\DurationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DurationRepository::class)
 */
class Duration
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
    private $duration;

    /**
     * @ORM\ManyToMany(targetEntity=Job::class, inversedBy="durations")
     */
    private $job_id;

    public function __construct()
    {
        $this->job_id = new ArrayCollection();
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

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return Collection|Job[]
     */
    public function getJobId(): Collection
    {
        return $this->job_id;
    }

    public function addJobId(Job $jobId): self
    {
        if (!$this->job_id->contains($jobId)) {
            $this->job_id[] = $jobId;
        }

        return $this;
    }

    public function removeJobId(Job $jobId): self
    {
        $this->job_id->removeElement($jobId);

        return $this;
    }
}
