<?php

namespace App\Controller;

use App\Dto\UserDto;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route(path: '/mon_profile', name: 'app_myProfile')]
    public function myProfile(#[CurrentUser] User $user): Response
    {
        $userInfos = new UserDto($user);

        return $this->render('main/my_profile.html.twig', [
            'userInfos' => $userInfos,
        ]);
    }
}
