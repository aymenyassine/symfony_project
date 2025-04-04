<?php

namespace App\Controller;

use App\Repository\PiscineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;


final class PiscineController extends AbstractController
{
    #[Route('/piscine', name: 'app_piscine')]
    public function index(Security $security, PiscineRepository $piscineRepository): Response
    {
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('piscine/index.html.twig', [
            'piscine' => $piscineRepository->findAll(),
            'isAdmin' => $isAdmin
        ]);
    }
}
