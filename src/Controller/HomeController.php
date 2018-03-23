<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render("index.html.twig", [
            'title' => "Luciana"
        ]);
    }

}