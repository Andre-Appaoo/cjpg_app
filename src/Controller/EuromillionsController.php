<?php

namespace App\Controller;

use App\Dto\UserDrawEuromillionsDto;
use App\Entity\DrawEuromillions;
use App\Entity\User;
use App\Entity\UserDrawEuromillions;
use App\Form\UserDrawEuromillionsType;
use App\Repository\DrawEuromillionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\UX\Turbo\TurboBundle;

class EuromillionsController extends AbstractController
{
    #[Route('/euromillions/historique', name: 'app_euromillions')]
    public function index(DrawEuromillionsRepository $drawEuromillionsRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $drawsEuromillions = $paginator->paginate(
            $drawEuromillionsRepository->findAll(),
            $request->query->getInt('page', 1),
            20
        );

        return $this->render('euromillions/index.html.twig', [
            'drawsEuromillions' => $drawsEuromillions,
        ]);
    }

    #[Route('/euromillions/test_mes_numéros', name: 'app_grid-form_euromillions')]
    public function grid(): Response
    {
        /*$userDrawEuromillions = new UserDrawEuromillions();

        $form = $this->createForm(UserDrawEuromillionsType::class, $userDrawEuromillions)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userDrawEuromillions->setUser($user);

            $entityManagerInterface->persist($userDrawEuromillions);
            $entityManagerInterface->flush();

            $userSelection = new UserDrawEuromillionsDto($userDrawEuromillions);

            $session = $request->getSession();
            $session->set('userSelection', $userSelection);

            if (TurboBundle::STREAM_FORMAT === $request->getPreferredFormat()) {
                $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
                return $this->renderBlock('euromillions/grid.html.twig', 'userDrawEuromillionsResults', ['userDrawEuromillions' => $userDrawEuromillions]);
            }

            return $this->redirectToRoute('app_grid-results_euromillions');
        }

        return $this->render('euromillions/grid.html.twig', [
            'form' => $form->createView(),
        ]);*/

        return $this->render('euromillions/grid.html.twig');
    }

    #[Route('/euromillions/test_mes_numéros/resultats', name: 'app_grid-results_euromillions')]
    public function gridResults(Request $request): Response
    {
        $session = $request->getSession();
        if (!$session->has('userSelection')) {
            return $this->redirectToRoute('app_grid-form_euromillions');
        }
        $userSelection = $session->get('userSelection');

        return $this->render('euromillions/results.html.twig', [
            'toto' => $userSelection,
        ]);
    }

    #[Route('/euromillions/{slug}', name: 'app_show_draw_euromillions')]
    public function show(DrawEuromillions $drawEuromillions): Response
    {
        return $this->render('euromillions/show.html.twig', [
            'drawEuromillions' => $drawEuromillions,
        ]);
    }
}
