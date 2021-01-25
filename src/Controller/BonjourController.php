<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjour")
     */
    public function index(): Response
    {

        $firstName = "Costa";
        return $this->render('bonjour/index.html.twig', [
            'firstName' => $firstName
        ]);
    }
}
