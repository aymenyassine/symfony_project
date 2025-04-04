<?php

namespace App\Controller;

use App\Repository\ExcursionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

final class ExcursionsController extends AbstractController
{
    #[Route('/excursions', name: 'app_excursions')]
    public function index(Security $security, ExcursionsRepository $excursionsRepository): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('excursions/index.html.twig', [
            'excursions' => $excursionsRepository->findAll(),
            'isAdmin' => $isAdmin,
        ]);
    }
}
