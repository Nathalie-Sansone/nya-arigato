<?php

namespace App\Controller;

use App\Entity\Avatar;
use App\Form\AvatarType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/my-profile", name="user_profile")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avatar = new Avatar();
        $form = $this->createForm(AvatarType::class, $avatar);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $avatar->setUpdatedAt(new \DateTimeImmutable());
            $avatar->setUser($this->getUser());
            $entityManager->persist($avatar);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('user/profile.html.twig', [
            'user' => $this->getUser(),
            'form' => $form->createView()
        ]);
    }
}
