<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/saisons', name: 'index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/saisons/{saison}', name: 'saisons')]
    public function saisons($saison)
    { 
    
        if ($saison != 'ete' && $saison != 'hiver' && $saison != 'automne' && $saison != 'printemps'  ) {
            return $this->render('main/404.html.twig');
        }else {

            return $this->render('main/saisons.html.twig',[
                'saisons' => $saison
            ]);
        }
       
    }
}
