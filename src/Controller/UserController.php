<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/inscriptionUser/{username}&{password}', name: 'inscription_user')]
    public function inscriptionUser(EntityManagerInterface $entityManager, string $username, string $password): JsonResponse
    {

        $user = new User();
        $user->setUserName($username);
        $user->setPassword($password);
        $user->setIsAdmin(false);

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse("Votre inscription a bien été prise en compte \nVous allez être rediriger vers la page pour vous connecter");
    }

    #[Route('/connexionUser/{username}&{password}', name: 'connexion_user')]
    public function connexionUser(EntityManagerInterface $entityManager, string $username, string $password): JsonResponse
    {
        $uRepo = $entityManager->getRepository(User::class);
        $user = $uRepo->findOneBy(['userName' => $username, 'password' => $password]);
        $response = $user == null ? "Identifiants incorrects" : ['id' => $user->getId(), 'name' => $user->getUserName(), 'isAdmin' => $user->isIsAdmin()];
        return new JsonResponse($response);
    }

    // #[Route('/connexion', name: 'connexion')]
    // public function connexion(EntityManagerInterface $entityManager): JsonResponse
    // {

    //     return new JsonResponse('connexion');
    // }
}