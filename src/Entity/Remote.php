<?php

namespace App\Entity;

use App\Repository\RemoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RemoteRepository::class)
 */
class Remote
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
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Job::class, inversedBy="remotes")
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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
