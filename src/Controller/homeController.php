<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController
{

    /**
     * @Route("/");
     * @return Response
     */
    public function helloWorld()
    {
        return new Response('Hello World!');
    }



}