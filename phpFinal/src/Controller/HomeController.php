<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ArticlesRepository $articlesRepository): Response
    {
        $articles = $articlesRepository->findAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'articles' => $articles, // Ajoutez cette ligne pour passer les articles au template
        ]);
    }

    #[Route('/article/{id}', name: 'article_show')]
    public function show(int $id, ArticlesRepository $articlesRepository): Response
    {
        $article = $articlesRepository->find($id);

        if (!$article) {
            throw $this->createNotFoundException('L\'article demandé n\'existe pas');
        }

        return $this->render('home/show.html.twig', [
            'article' => $article,
        ]);
    }

}
