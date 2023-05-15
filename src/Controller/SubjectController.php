<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Project;
use App\Entity\Subject;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubjectController extends AbstractController
{
    #[Route('/subject', name: 'create_subject')]
    public function createSubject(EntityManagerInterface $entityManager): JsonResponse
    {
        $uRepo = $entityManager->getRepository(User::class);
        $user = $uRepo->findOneBy(['id' => 1]);

        $categRepo = $entityManager->getRepository(Category::class);
        $categ = $categRepo->findOneBy(['id' => 1]);

        $subject = new Subject();
        $subject->setName("Crous");
        $subject->setCategory($categ);
        $subject->setUser($user);

        $entityManager->persist($subject);
        $entityManager->flush();

        return new JsonResponse('Saved new subject with id '.$subject->getId());
    }

    #[Route('/all-subjects', name: 'all_subjects')]
    public function getAllSubjects(EntityManagerInterface $entityManager): JsonResponse
    {
        $subjectRepo = $entityManager->getRepository(Subject::class);

        $allSubjects = $subjectRepo->findAll();

        $subjects = [];
        foreach ($allSubjects as $subject) {
            $subjects[] = [
                'id' => $subject->getId(),
                'name' => $subject->getName(),
            ];
        }

        return new JsonResponse($subjects);
    }

    #[Route('/history/{userId}', name: 'history')]
    public function getHistory(EntityManagerInterface $entityManager, int $userId): JsonResponse
    {
        $subjectRepo = $entityManager->getRepository(Subject::class);
        $uRepo = $entityManager->getRepository(User::class);
        $user = $uRepo->findOneBy(['id' => $userId]);

        $subjects = [];
        foreach ($subjectRepo->findBy(['user' => $user]) as $subject) {
            $subjects[] = [
                'id' => $subject->getId(),
                'name' => $subject->getName(),
            ];
        }

        $votes = [];
        foreach ($user->getProjectVotes() as $vote) {
            $votes[] = [
                'id' => $vote->getId(),
                'name' => $vote->getName(),
            ];
        };

        return new JsonResponse([...["subjects" => $subjects], ...["votes" => $votes]]);
    }

    #[Route('/graph/{subjectId}', name: 'graph')]
    public function getGraph(EntityManagerInterface $entityManager, int $subjectId): JsonResponse
    {
        $subjectRepo = $entityManager->getRepository(Subject::class);
        $subject = $subjectRepo->findOneBy(['id' => $subjectId]);

        $projects = [];
        $votes = [];
        $allProjects = [];
        foreach ($subject->getProjects() as $project) {
            $projects[] = $project->getName();
            $votes[] = count($project->getUserVotes());
            $allProjects[] = [
                "id" => $project->getId(),
                "name" => $project->getName(),
                "description" => $project->getDescription(),
            ];
        }

        return new JsonResponse([
            ...["labels" => $projects], 
            ...["data" => $votes], 
            ...["subject" => [
                "id" => $subject->getId(),
                "name" => $subject->getName()
            ]],
            ...["projects" =>  $allProjects],
        ]);
    }
}
