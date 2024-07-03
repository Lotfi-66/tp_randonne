<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="article_list")
     */
    public function list(): Response
    {
        // Cette méthode retournera la vue twig
        return $this->render('article/list.html.twig');
    }

    /**
     * @Route("/article/new", name="article_new")
     */
    public function new(): Response
    {
        // Cette méthode retournera la vue twig
        return $this->render('article/new.html.twig');
    }
}
