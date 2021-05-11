<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HomeController extends AbstractController
{
    /**
     * @Route(path="/home/{nom?}", name="home_index_route", methods={"GET", "POST"})
    */
    public function index(?string $nom): Response
    {
        if(!isset($nom)){
            // throw new HttpException(404, 'On ne peut vous afficher la page de cette personne');
            throw $this->createNotFoundException('On ne peut vous afficher la page de cette personne');
        }
        return $this->render('home/index.html.twig', [
            'controller_name' => $nom ,
        ]);
    }
    /**
     * @Route(path="/home/response/explicite", name="home_response_explicite_route", methods={"GET", "POST"})
    */
    public function responseExplicite(): Response
    {
        $response = new Response("<p>Réponse explicite</p>", 200, ["content-type"=> "text/html"]);

        return $response;
    }
    /**
     * @Route(path="/home/json", name="home_json_route", methods={"GET"}, priority=2)
    */
    public function customJson(): Response
    {
        $response = new Response("<p>Réponse explicite</p>", 200, ["content-type"=> "text/html"]);
        $projetDir = $this->getParameter("kernel.project_dir");
        $email = $this->getParameter("email");
        return new JsonResponse(["nom"=>"BOUVANESVARY", "prenom"=>"Souprmanien", "projetDir" => $projetDir, "email"=> $email]);
    }
}
