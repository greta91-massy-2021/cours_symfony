<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index(): Response
    {
        // $url = $this->generateUrl('home_index_route', ['nom'=>'Wick']);
        // return $this->redirect($url);
        // return new RedirectResponse($url);
        return $this->redirectToRoute('home_index_route', ['nom'=>'Wick']);
    }
}
