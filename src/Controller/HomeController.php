<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(#[CurrentUser] $currentUser=null): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'currentUser' => $currentUser
        ]);
    }
    #[Route('/rules', name: 'app_rules')]
    public function rules (#[CurrentUser] $currentUser=null): Response
    {
        return $this->render('home/rules.index.html.twig', [
            'controller_name' => 'HomeController',
            'currentUser' => $currentUser
        ]);
    }


    #[Route('/myprofile', name: 'app_myprofile')]
    public function myprofile(#[CurrentUser] $currentUser=null): Response
    {
        return $this->render('home/myprofile.html.twig', [
            'controller_name' => 'HomeController',
            'currentUser' => $currentUser
        ]);
    }
}
