<?php

namespace App\Controller;

use App\Entity\Excursions;
use App\Form\ExcursionsType;
use App\Repository\ExcursionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/excursion')]
final class ExcursionController extends AbstractController
{
    #[Route(name: 'app_excursion_index', methods: ['GET'])]
    public function index(Security $security,ExcursionsRepository $excursionsRepository): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('excursion/index.html.twig', [
            'excursions' => $excursionsRepository->findAll(),
            'isAdmin' => $isAdmin,
        ]);
    }

    #[Route('/new', name: 'app_excursion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $excursion = new Excursions();
        $form = $this->createForm(ExcursionsType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($excursion);
            $entityManager->flush();

            return $this->redirectToRoute('app_excursions', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/new.html.twig', [
            'excursion' => $excursion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_excursion_show', methods: ['GET'])]
    public function show(Security $security,Excursions $excursion): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('excursion/show.html.twig', [
            'excursion' => $excursion,
            'isAdmin' => $isAdmin,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_excursion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Excursions $excursion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExcursionsType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_excursion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('excursion/edit.html.twig', [
            'excursion' => $excursion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_excursion_delete', methods: ['POST'])]
    public function delete(Request $request, Excursions $excursion, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$excursion->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($excursion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_excursions', [], Response::HTTP_SEE_OTHER);
    }
}
