<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Form\RdvType;


class RdvController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();

        $rdv = $em->getRepository("ProjetSymfony2Bundle:Rdv")->findAll();

        /* $request = $this->get('request');
          ////recherche
          if ($request->getMethod() == "POST") {
          $search = $request->get('search');

          $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->
          findBy(array("nom" => $search));
          }
         */

        return $this->render("ProjetSymfony2Bundle:Rdv:liste_rdvs.html.twig", array("rdvs" => $rdv));
    }    


    public function listRdvAction() {
        /*$user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
       /* $Request = $this->getRequest();

        /*if ($Request->getMethod() == 'POST') 
            {
            $date = $Request->get('date');

            $rdv = $em->getRepository('ProjetSymfony2Bundle:Rdv')->findByDate($date);
            return $this->render('ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig', array('rdvs' => $rdv));
        }

        $rdvs = $em->getRepository('ProjetSymfony2Bundle:Rdv')->findByIdCandidat($user);
        return $this->render('ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig', array('rdvs' => $rdvs));
    } */
        
     $em = $this->getDoctrine()->getManager();

        $rdv = $em->getRepository("ProjetSymfony2Bundle:Rdv")->findAll();

        /* $request = $this->get('request');
          ////recherche
          if ($request->getMethod() == "POST") {
          $search = $request->get('search');

          $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->
          findBy(array("nom" => $search));
          }
         */

        return $this->render("ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig", array("rdvs" => $rdv));
          }  
         
}
          

