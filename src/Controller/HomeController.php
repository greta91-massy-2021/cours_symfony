<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route(path="/home", name="home_route")
 */
class HomeController extends AbstractController
{
    /**
     * @Route(path="/", name="home_index_route2")
     * @Route(path="/index", name="home_index_route")
    */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
