<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ExperienceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/categories/{category_id}", name="category_show")
     * @ParamConverter("category", class="App\Entity\Category", options={"mapping": {"category_id": "id"}})
     */
    public function show(Category $category,
                         ExperienceRepository $experienceRepository
                         ): Response
    {

        $experiences = $experienceRepository->findBy([
            'category' => $category], [
                'id' => 'DESC'
        ]);

        return $this->render('category/show.html.twig', [
            'experiences' => $experiences,
            'category' => $category
        ]);
    }
}
