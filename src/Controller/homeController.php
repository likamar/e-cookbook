<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function helloWorld()
    {
        return $this->render('base.html.twig');
    }



}