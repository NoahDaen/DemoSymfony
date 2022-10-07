<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home_default')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'id' => null
        ]);
    }

    #[Route('/{id}', name: 'home_id')]
    public function afficheId(\Symfony\Component\HttpFoundation\Request $request): Response
    {


        $routeParameters = $request->attributes->get('_route_params');

        $id = $routeParameters['id'];

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'id' => $id
        ]);
    }

}
