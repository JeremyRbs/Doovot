<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdOn = null;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Subject $subject = null;

    #[ORM\ManyToOne(inversedBy: 'projectsCreated')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $projectCreatedByUser = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'projectVotes')]
    private Collection $userVotes;

    public function __construct()
    {
        $this->userVotes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedOn(): ?\DateTimeInterface
    {
        return $this->createdOn;
    }

    public function setCreatedOn(\DateTimeInterface $createdOn): self
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getProjectCreatedByUser(): ?User
    {
        return $this->projectCreatedByUser;
    }

    public function setProjectCreatedByUser(?User $projectCreatedByUser): self
    {
        $this->projectCreatedByUser = $projectCreatedByUser;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUserVotes(): Collection
    {
        return $this->userVotes;
    }

    public function addUserVote(User $userVote): self
    {
        if (!$this->userVotes->contains($userVote)) {
            $this->userVotes->add($userVote);
        }

        return $this;
    }

    public function removeUserVote(User $userVote): self
    {
        $this->userVotes->removeElement($userVote);

        return $this;
    }
}
