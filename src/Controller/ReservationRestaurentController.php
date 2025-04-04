<?php

namespace App\Controller;

use App\Entity\ReservaRestaurants;
use App\Form\ReservaRestaurantsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class ReservationRestaurentController extends AbstractController
{
    #[Route('/reservation/restaurent', name: 'app_reservation_restaurent')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new ReservaRestaurants();
        $form = $this->createForm(ReservaRestaurantsType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réservation a été enregistrée avec succès !');

            return $this->redirectToRoute('app_reservation_success');
        }

        return $this->render('reservation_restaurent/index.html.twig', [
            'controller_name' => 'ReservationRestaurentController',
            'form' => $form->createView(),
        ]);
    }
}
