<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewIndexController extends AbstractController
{
    ##[Route('/new/index', name: 'app_new_index')]
    #[Route('/', name: 'homepage2')]
    public function index(): Response
    {
        return $this->render('new_index/index.html.twig', [
            'controller_name' => 'NewIndexController',
        ]);
    }
}
