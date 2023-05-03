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
}
