<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Flex\Response;

class HomeController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/", name="index")
     */
    public function indexAction($type)
    {

    }

}