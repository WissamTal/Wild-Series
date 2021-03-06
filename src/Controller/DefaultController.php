<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
     public function navbarTop(CategoryRepository $categoryRepository): Response
    {
        return $this->render(
            '/navbartop.html.twig',
            [
                'categories' => $categoryRepository->findBy([], ['id' => 'DESC']),
            ]
        );
    }

}
