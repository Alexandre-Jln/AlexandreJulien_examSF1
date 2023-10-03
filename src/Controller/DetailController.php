<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    #[Route('/detail', name: 'app_detail')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findAll();

        return $this->render('detail/index.html.twig', [
            'users' => $user,
        ]);
    }
}
