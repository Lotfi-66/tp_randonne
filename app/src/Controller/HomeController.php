<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController

{

    private $articles = [
        ["titre" => "Chaussure", "description" => "Super chaussure de randonné bla bla bla ", "img" => "chaussure",  "prix" => 55.50],
        ["titre" => "baton de marche", "description" => "baton de marche en carbonne super pour les longue randonné ", "img" => "baton", "prix" => 28.90],
        ["titre" => "t-shirt technique", "description" => "t-shirt ultra resistant et anti transpirant ", "img" => "t-shirt", "prix" => 30.15],
    ];


    private $data = [];

    public function __construct()
    {
    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id): Response
    {
        return $this->render('article/show.html.twig', [
            'id' => $id,
        ]);
    }
    // private function loadData(){
    //     //chemin du json 
    //     $path = $this->getParameter('kernel.project_dir')."/public/data/data.json";
    //     //lire le fichier json
    //     $json = file_get_contents($path);
    //     //décodage + modification du tableau de données
    //     $this->data = $this->changeTab(json_decode($json, true));
    // }




    #[Route("/", name: "homepage", methods: ['GET'])]
    public function bienvenue() // premier methode 
    {

        return $this->render("home/homepage.html.twig", [
            "articles" => $this->articles,

        ]);
    }




    #[Route("/detail/{numdetail}", name: "detailpage", methods: ['GET'])]
    public function detail(string $numdetail)
    {
        return $this->render(
            "home/detail.html.twig",
            [
                "articles" => $this->articles[intval($numdetail)],
                "article" => $this->articles,
            ]
        );
    }
}
