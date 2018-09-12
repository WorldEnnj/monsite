<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function mainPage()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

       /**
     * @Route("/carole")
     */
    public function index()
    {
        return $this->render('default/carole.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


}
