<?php

namespace App\Controller;

use App\Entity\User;
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
        $subject->setName("Cours");
        $subject->setCategory($categ);
        $subject->setUser($user);

        $entityManager->persist($subject);
        $entityManager->flush();

        return new JsonResponse('Saved new subject with id '.$subject->getId());
    }
}
