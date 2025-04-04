<?php

namespace App\Controller;

use App\Repository\HotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

final class HotelController extends AbstractController
{
    #[Route('/hotel', name: 'app_hotel')]
    public function index(Security $security,HotelRepository $hotelRepository, Request $request): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        // Récupérer le paramètre 'etoile' de l'URL (s'il existe)
        $etoile = $request->query->get('etoile');

        // Si un paramètre 'etoile' est présent, filtrer les hôtels par étoile
        if ($etoile) {
            $hotel = $hotelRepository->findBy(['etoile' => $etoile]);
        } else {
            // Sinon, récupérer tous les hôtels
            $hotel = $hotelRepository->findAll();
        }

        // Passer les hôtels filtrés à la vue
        return $this->render('hotel/index.html.twig', [
            'hotel' => $hotel,
            'isAdmin' => $isAdmin
        ]);
    }
}
