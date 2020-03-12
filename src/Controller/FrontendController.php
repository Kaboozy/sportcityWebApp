<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Description of FrontendController
 *
 * @author cedric
 */
class FrontendController extends AbstractController {
    
    /**
     * @Route("/accueil.html")
     */
    public function index()
    {
        return $this->render('frontend/index.html.twig', [
            
        ]);
    }
    
     /**
     * @Route("/soumission-image.html")
     */
    public function submitImage()
    {
        return $this->render('frontend/submit.html.twig', [
            
        ]);
    }
    
     /**
     * @Route("/mon-profil.html")
     */
    public function profil()
    {
        return $this->render('frontend/profil.html.twig', [
            
        ]);
    }
    
     /**
     * @Route("/scan-code-barre.html")
     */
    public function scanCode()
    {
        return $this->render('frontend/scanCode.html.twig', [
            
        ]);
    }
    
     /**
     * @Route("/soumission-information.html")
     */
    public function returnInformation()
    {
        return $this->render('frontend/returnInformation.html.twig', [
            
        ]);
    }
    
}
