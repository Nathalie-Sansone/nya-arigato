<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ExperienceRepository $experienceRepository): Response
    {
        $experiences = $experienceRepository->findAll();
        return $this->render('home/index.html.twig', [
            'experiences' => $experiences
        ]);
    }

    public function navbarTop(CategoryRepository $categoryRepository): Response

    {
        return $this->render('component/_navbartop.html.twig', [
            'categories' => $categoryRepository->findBy([], ['id' => 'DESC'])
        ]);
    }
}
