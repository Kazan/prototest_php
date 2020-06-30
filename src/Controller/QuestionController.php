<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf("Question reply: %s", $slug));
    }
}