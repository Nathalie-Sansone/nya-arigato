<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Experience;
use App\Form\CommentType;
use App\Form\ExperienceType;
use App\Form\SearchExperienceType;
use App\Repository\CommentRepository;
use App\Repository\ExperienceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

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

        $form = $this->createForm(SearchExperienceType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'];
            $experiencesData = $experienceRepository->findByCityorTitle($search);
            $experiences = $paginator->paginate(
                $experiencesData,
                $request->query->getInt('page', 1),
                8
            );
        }

        return $this->render('experience/index.html.twig', [
            'experiences' => $experiences,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/experience/new", name="new_experience", methods={"GET", "POST"})
     * @IsGranted("ROLE_USER")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $experience->setCreatedAt(new \DateTimeImmutable());
            $experience->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->persist($experience);
            $entityManager->flush();

            $this->addFlash('info', 'Votre expérience a bien été ajoutée !');

            return $this->redirectToRoute('experience_index');
        }
            return $this->render('experience/new.html.twig', [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/experience/{id}", name="experience_show", methods={"GET", "POST"})
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

    /**
     * @Route("experience/delete/{experience_id}", name="experience_delete", methods={"GET", "POST"})
     * @ParamConverter("experience", class="App\Entity\Experience", options={"mapping": {"experience_id": "id"}})
     */
    public function delete(Experience $experience,
                           EntityManagerInterface $entityManager,
                           Request $request): Response
    {
        if ($this->isCsrfTokenValid('delete'.$experience->getId(), $request->request->get('_token'))) {
            $entityManager->remove($experience);
            $entityManager->flush();
        }

        return $this->redirectToRoute('experience_index');
    }
}
