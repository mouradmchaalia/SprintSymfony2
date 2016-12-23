<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    
    public function homeAction() {
       
        
        $Latitudes = '-24';
        $Longitudes='142';
        return $this->render('ProjetSymfony2Bundle:Home:home.html.twig', array('Latitudes' => $Latitudes,'Longitudes'=>$Longitudes));
         

    }
    
    public function homeCandidatAction() {
       
        
        
        return $this->render('ProjetSymfony2Bundle:Home:homeCandidat.html.twig');
         

    }

   
}
