<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    /**
     * @Route("/experience", name="experience_index")
     */
    public function index(ExperienceRepository $experienceRepository): Response
    {
        $experiences = $experienceRepository->findAll();

        return $this->render('experience/index.html.twig', [
            'experiences' => $experiences,
        ]);
    }

    /**
     * @Route("/experience/{id}", name="experience_show")
     */
    public function show(int $id, ExperienceRepository $experienceRepository): Response
    {
        $experience = $experienceRepository->findOneBy(['id' => $id]);

        return $this->render('experience/show.html.twig', [
            'experience' => $experience
        ]);
    }
}
