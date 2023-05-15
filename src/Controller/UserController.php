<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user', name: 'create_user')]
    public function createUser(EntityManagerInterface $entityManager): JsonResponse
    {
        $user = new User();
        $user->setUserName("tata");
        $user->setPassword("tata");
        $user->setIsAdmin(true);

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse('Saved new user with id '.$user->getId());
    }

    // #[Route('/connexion', name: 'connexion')]
    // public function connexion(EntityManagerInterface $entityManager): JsonResponse
    // {

    //     return new JsonResponse('connexion');
    // }
}