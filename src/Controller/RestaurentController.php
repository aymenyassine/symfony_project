<?php

namespace App\Controller;

use App\Entity\Restaurent;
use App\Form\RestaurentType;
use App\Repository\RestaurentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;


#[Route('/restaurent')]
final class RestaurentController extends AbstractController
{
    #[Route(name: 'app_restaurent_index', methods: ['GET'])]
    public function index(Security $security, RestaurentRepository $restaurentRepository): Response
    {
        $form = $this->createForm(RestaurentType::class, new Restaurent());
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->render('restaurent/index.html.twig', [
            'restaurents' => $restaurentRepository->findAll(),
            'form' => $form->createView(),
            'isAdmin' => $isAdmin,
        ]);
    }
    #[Route('/res',name:'app_restaurent', methods: ['GET'])]
    public function res(RestaurentRepository $restaurentRepository): Response
    {
        return $this->render('restaurent/res.html.twig', [
            'restaurents' => $restaurentRepository->findAll()
        ]);
    }

    #[Route('/new', name: 'app_restaurent_new', methods: ['GET', 'POST'])]
        public function new(Request $request, EntityManagerInterface $entityManager): Response
        {
            $restaurent = new Restaurent();
            $form = $this->createForm(RestaurentType::class, $restaurent);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // Gestion de la relation ManyToOne (menu principal)
                $menuPrincipal = $form->get('menu')->getData();
                $restaurent->setMenu($menuPrincipal);

                // Gestion de la relation ManyToMany (menus associés)
                $menusAssocies = $form->get('menus')->getData();
                foreach ($menusAssocies as $menu) {
                    $restaurent->addMenu($menu);
                }

                // Persist et flush des données
                $entityManager->persist($restaurent);
                $entityManager->flush();

                return $this->redirectToRoute('app_restaurent_index');
            }

            return $this->render('restaurent/new.html.twig', [
                'restaurent' => $restaurent,
                'form' => $form->createView(),
            ]);
        }


    #[Route('/{id}', name: 'app_restaurent_show', methods: ['GET'])]
    public function show(Restaurent $restaurent): Response
    {
        return $this->render('restaurent/show.html.twig', [
            'restaurent' => $restaurent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_restaurent_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Restaurent $restaurent, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(RestaurentType::class, $restaurent);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gestion du fichier uploadé
        $photoFile = $form->get('photo')->getData();
        if ($photoFile) {
            $newFilename = uniqid() . '.' . $photoFile->guessExtension();
            $photoFile->move(
                $this->getParameter('photos_directory'),
                $newFilename
            );
            $restaurent->setPhoto($newFilename);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_restaurent_index');
    }

    return $this->render('restaurent/edit.html.twig', [
        'restaurent' => $restaurent,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}', name: 'app_restaurent_delete', methods: ['POST'])]
    public function delete(Security $security,Request $request, Restaurent $restaurent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurent->getId(), $request->get('_token'))) {
            $entityManager->remove($restaurent);
            $entityManager->flush();
        }
        $isAdmin = $security->isGranted('ROLE_ADMIN');
        return $this->redirectToRoute('app_restaurent_index',[
            'isAdmin' => $isAdmin,
        ]);
    }
}
