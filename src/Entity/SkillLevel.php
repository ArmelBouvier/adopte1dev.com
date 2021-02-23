<?php

namespace App\Entity;

use App\Repository\SkillLevelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillLevelRepository::class)
 */
class SkillLevel
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
     * @ORM\ManyToMany(targetEntity=Job::class, inversedBy="skillLevels")
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
