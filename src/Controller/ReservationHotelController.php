<?php

namespace App\Controller;

use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationHotelController extends AbstractController
{
    #[Route('/reservation/new', name: 'app_reservation_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new ReservationHotel();
        $form = $this->createForm(ReservationHotelType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réservation a été enregistrée avec succès !');

            return $this->redirectToRoute('app_reservation_success');
        }

        return $this->render('reservation_hotel/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/success', name: 'app_reservation_success')]
    public function success(): Response
    {
        return $this->render('reservation_hotel/success.html.twig');
    }
}
