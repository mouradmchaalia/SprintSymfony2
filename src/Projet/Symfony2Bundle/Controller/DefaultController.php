<?php

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Latitudes = '-24';
        $Longitudes='142';
        return $this->render('ProjetSymfony2Bundle:Default:index.html.twig', array('Latitudes' => $Latitudes,'Longitudes'=>$Longitudes));
    }

    
      public function index2Action()
    {
        $Latitudes = '-24';
        $Longitudes='142';
        return $this->render('ProjetSymfony2Bundle:Default:index2.html.twig', array('Latitudes' => $Latitudes,'Longitudes'=>$Longitudes));
    
}
    }
