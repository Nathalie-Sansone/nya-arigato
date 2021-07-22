<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvatarController extends AbstractController
{
    /**
     * @Route("/avatar", name="avatar")
     */
    public function index(): Response
    {
        return $this->render('avatar/index.html.twig', [
            'controller_name' => 'AvatarController',
        ]);
    }
}
