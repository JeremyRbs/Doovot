<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
	/**
	 * @Route("/", name="app", requirements={"slug"=".+"})")
	 */
	public function app(): Response
    {
		return $this->render('base.html.twig', []);
    }

	/**
	 * @Route("/{vueRouting}", name="index")
	 * @return Response
	 */
	// public function appAction(): Response
	// {
	// 	return $this->render('base.html.twig', []);
	// }
}
