<?php

namespace App\Controller;

use App\Entity\ReservaRestaurants;
use App\Form\ReservaRestaurants1Type;
use App\Repository\ReservaRestaurantsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reserva/restaurants')]
final class ReservaRestaurantsController extends AbstractController
{
    #[Route(name: 'app_reserva_restaurants_index', methods: ['GET'])]
    public function index(ReservaRestaurantsRepository $reservaRestaurantsRepository): Response
    {
        return $this->render('reserva_restaurants/index.html.twig', [
            'reserva_restaurants' => $reservaRestaurantsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reserva_restaurants_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservaRestaurant = new ReservaRestaurants();
        $form = $this->createForm(ReservaRestaurants1Type::class, $reservaRestaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservaRestaurant);
            $entityManager->flush();

            return $this->redirectToRoute('app_reserva_restaurants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reserva_restaurants/new.html.twig', [
            'reserva_restaurant' => $reservaRestaurant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reserva_restaurants_show', methods: ['GET'])]
    public function show(ReservaRestaurants $reservaRestaurant): Response
    {
        return $this->render('reserva_restaurants/show.html.twig', [
            'reserva_restaurant' => $reservaRestaurant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reserva_restaurants_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservaRestaurants $reservaRestaurant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservaRestaurants1Type::class, $reservaRestaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reserva_restaurants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reserva_restaurants/edit.html.twig', [
            'reserva_restaurant' => $reservaRestaurant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reserva_restaurants_delete', methods: ['POST'])]
    public function delete(Request $request, ReservaRestaurants $reservaRestaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservaRestaurant->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservaRestaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reserva_restaurants_index', [], Response::HTTP_SEE_OTHER);
    }
}
