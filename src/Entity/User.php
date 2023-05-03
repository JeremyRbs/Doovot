<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $userName = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column]
    private ?bool $isAdmin = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Subject::class)]
    private Collection $subjects;

    #[ORM\OneToMany(mappedBy: 'projectCreatedByUser', targetEntity: Project::class)]
    private Collection $projectsCreated;

    #[ORM\ManyToMany(targetEntity: Project::class, mappedBy: 'userVotes')]
    private Collection $projectVotes;

    public function __construct()
    {
        $this->subjects = new ArrayCollection();
        $this->projects = new ArrayCollection();
        $this->projectsCreated = new ArrayCollection();
        $this->projectVotes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return Collection<int, Subject>
     */
    public function getSubjects(): Collection
    {
        return $this->subjects;
    }

    public function addSubject(Subject $subject): self
    {
        if (!$this->subjects->contains($subject)) {
            $this->subjects->add($subject);
            $subject->setUser($this);
        }

        return $this;
    }

    public function removeSubject(Subject $subject): self
    {
        if ($this->subjects->removeElement($subject)) {
            // set the owning side to null (unless already changed)
            if ($subject->getUser() === $this) {
                $subject->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjectsCreated(): Collection
    {
        return $this->projectsCreated;
    }

    public function addProjectsCreated(Project $projectsCreated): self
    {
        if (!$this->projectsCreated->contains($projectsCreated)) {
            $this->projectsCreated->add($projectsCreated);
            $projectsCreated->setProjectCreatedByUser($this);
        }

        return $this;
    }

    public function removeProjectsCreated(Project $projectsCreated): self
    {
        if ($this->projectsCreated->removeElement($projectsCreated)) {
            // set the owning side to null (unless already changed)
            if ($projectsCreated->getProjectCreatedByUser() === $this) {
                $projectsCreated->setProjectCreatedByUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjectVotes(): Collection
    {
        return $this->projectVotes;
    }

    public function addProjectVote(Project $projectVote): self
    {
        if (!$this->projectVotes->contains($projectVote)) {
            $this->projectVotes->add($projectVote);
            $projectVote->addUserVote($this);
        }

        return $this;
    }

    public function removeProjectVote(Project $projectVote): self
    {
        if ($this->projectVotes->removeElement($projectVote)) {
            $projectVote->removeUserVote($this);
        }

        return $this;
    }
}
