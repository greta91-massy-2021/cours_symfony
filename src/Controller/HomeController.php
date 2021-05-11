<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route(path="/home/{nom?}", name="home_index0_route")
    */
    public function index0(?string $nom): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $nom,
        ]);
    }
    /**
     * @Route(path="/home/{nom}", name="home_index_route", priority=2)
    */
    public function index(string $nom): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $nom . " route2" ,
        ]);
    }

    /**
     * @Route(path="/home/age/{age}", name="home_index2_route", requirements={"age"="\d{2,3}"})
    */
    public function index2(int $age): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $age,
        ]);
    }

    /**
     * @Route(path="/home/age2/{age<\d{2,3}>}", name="home_index3_route")
    */
    public function index3(int $age): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $age,
        ]);
    }
}
