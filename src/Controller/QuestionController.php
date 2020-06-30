<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() : Response
    {
        return new Response("Here we are");
    }

    /**
     * @Route("/question/{slug}")
     */
    public function question($slug) : Response
    {
        return $this->render('question/show.html.twig', [
            'slug' => $slug,
        ]);
    }
}