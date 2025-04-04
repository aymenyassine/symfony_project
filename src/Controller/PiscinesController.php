<?php

namespace App\Controller;

use App\Entity\Piscine;
use App\Form\PiscineType;
use App\Repository\PiscineRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/piscines')]
final class PiscinesController extends AbstractController
{
    #[Route(name: 'app_piscines_index', methods: ['GET'])]
    public function index(Security $security,PiscineRepository $piscineRepository): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('piscines/index.html.twig', [
            'piscines' => $piscineRepository->findAll(),
            'isAdmin' => $isAdmin,
        ]);
    }

    #[Route('/new', name: 'app_piscines_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $piscine = new Piscine();
        $form = $this->createForm(PiscineType::class, $piscine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($piscine);
            $entityManager->flush();

            return $this->redirectToRoute('app_piscines_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('piscines/new.html.twig', [
            'piscine' => $piscine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_piscines_show', methods: ['GET'])]
    public function show(Piscine $piscine): Response
    {
        return $this->render('piscines/show.html.twig', [
            'piscine' => $piscine,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_piscines_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Piscine $piscine, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PiscineType::class, $piscine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_piscines_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('piscines/edit.html.twig', [
            'piscine' => $piscine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_piscines_delete', methods: ['POST'])]
    public function delete(Request $request, Piscine $piscine, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$piscine->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($piscine);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_piscines_index', [], Response::HTTP_SEE_OTHER);
    }
}
