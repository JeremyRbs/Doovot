<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Project;
use App\Entity\Subject;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    #[Route('/project', name: 'create_project')]
    public function createProject(EntityManagerInterface $entityManager): JsonResponse
    {
        $uRepo = $entityManager->getRepository(User::class);
        $user = $uRepo->findOneBy(['id' => 1]);

        $subjectRepo = $entityManager->getRepository(Subject::class);
        $subject = $subjectRepo->findOneBy(['id' => 1]);

        $project = new Project();
        $project->setName("Distanciel");
        $project->setDescription("Pouvoir passer l'ensemble des cours en distanciel.");
        $project->setCreatedOn(new DateTime());
        $project->setSubject($subject);
        $project->setProjectCreatedByUser($user);

        $entityManager->persist($project);
        $entityManager->flush();

        return new JsonResponse('Saved new project with id '.$project->getId());
    }
    
    #[Route('/new-vote/{projectId}&{userId}', name: 'new_vote')]
    public function newVote(EntityManagerInterface $entityManager, int $projectId, int $userId): JsonResponse
    {
        $subjectRepo = $entityManager->getRepository(Subject::class);
        $projectRepo = $entityManager->getRepository(Project::class);
        $uRepo = $entityManager->getRepository(User::class);

        $project = $projectRepo->findOneBy(['id' => $projectId]);
        $subject = $subjectRepo->findOneBy(['id' => $project->getSubject()->getId()]);
        $user = $uRepo->findOneBy(['id' => $userId]);

        $subjectVoted = [];
        $subjectVoted = array_map(fn($projectVote) => $projectVote->getSubject()->getId(), $user->getProjectVotes()->toArray());

        // checks that the user has not already voted for this subject
        if (!in_array($subject->getId(), $subjectVoted)) {
            $project->addUserVote($user);
            $entityManager->persist($project);
            $entityManager->flush();
            return new JsonResponse("Vote pris en compte.");
        }

        return new JsonResponse("Vous avez déjà voté pour ce sujet.");
    }
}
