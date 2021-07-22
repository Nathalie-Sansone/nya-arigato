<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\ExperienceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    /**
     * @Route("/experience", name="experience_index")
     */
    public function index(ExperienceRepository $experienceRepository,
                          PaginatorInterface $paginator,
                          Request $request): Response
    {
        $experiencesData = $experienceRepository->findBy(
            [],
            ['id' => 'DESC']
        );
        $experiences = $paginator->paginate(
            $experiencesData,
            $request->query->getInt('page', 1),
            8
        );

        return $this->render('experience/index.html.twig', [
            'experiences' => $experiences,
        ]);
    }

    /**
     * @Route("/experience/{id}", name="experience_show")
     */
    public function show(Int $id,
                         ExperienceRepository $experienceRepository,
                         CommentRepository $commentRepository,
                         Request $request,
                         EntityManagerInterface $entityManager
                         ): Response
    {

        $experience = $experienceRepository->findOneBy([
            'id' => $id
        ]);

        $comments = $commentRepository->findAll();
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $comment->setAuthor($this->getUser());
            $comment->setExperience($experience);
            $entityManager->persist($comment);
            $entityManager->flush();

            $this->addFlash('info', 'Votre commentaire a bien été publié !');

            return $this->redirectToRoute('experience_show', [
                'id' => $id
            ]);
        }

        return $this->render('experience/show.html.twig', [
            'experience' => $experience,
            'comments' => $comments,
            'form' => $form->createView()
        ]);
    }
}
