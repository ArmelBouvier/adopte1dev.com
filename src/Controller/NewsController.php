<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function browse(NewsRepository $newsRepository): Response
    {
        return $this->render('news/browse.html.twig', [
            'lastNews' => $newsRepository->findForHomepage(),
        ]);
    }

    /**
     * @Route("/news/{id}", name="news_read", requirements={"id": "\d+"})
     */
    public function read(int $id, NewsRepository $newsRepository)
    {
        $news = $newsRepository->find($id);

        if ($news === null) {
            throw $this->createNotFoundException('L\'actuce demandée n\'existe pas');
        }
        
        $title = $news->getTitle();
        $slug = preg_replace('/[^a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*/', '-', strtolower($title));

        $news->setSlug($slug);

        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('news_read_slug', ['slug' => $news->getSlug()]);
    }

    /**
     * @Route("/news/{slug}", name="news_read_slug")
     */
    public function readSlug(NewsRepository $newsRepository)
    {
        return $this->render('news/read.html.twig');
    }
}
