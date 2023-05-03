<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'create_category')]
    public function createCategory(EntityManagerInterface $entityManager): JsonResponse
    {
        $category = new Category();
        $category->setLabel("Cours");

        $entityManager->persist($category);
        $entityManager->flush();

        return new JsonResponse('Saved new category with id '.$category->getId());
    }
}
