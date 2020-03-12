<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BackendController extends AbstractController
{
    /**
     * @Route("/admin")
     */
    public function index()
    {
        return $this->render('backend/index.html.twig', [
            
        ]);
    }
}
