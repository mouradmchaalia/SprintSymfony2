<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Entity\ResponsableAutoEcole;

class ResponsableAutoEcoleController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();

       $responsable = $em->getRepository("ProjetSymfony2Bundle:ResponsableAutoEcole")->findAll();

        $request = $this->get('request');
        ///recherche
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');

            $candidat = $em->getRepository('ProjetSymfony2Bundle:ResponsableAutoEcole')->
                   findBy(array("nom" => $search));
        }

       

        return $this->render("ProjetSymfony2Bundle:Responsable_Auto_Ecole:liste_responsables.html.Twig", array("responsables" => $responsable));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $responsable = $em->getRepository('ProjetSymfony2Bundle:ResponsableAutoEcole')->find($id);
        $em->remove($responsable);
        $em->flush();

        //return $this->redirectToRoute("esprit_parc_Affichage_Modele");
        // Pour les versions qui précèdent la 2.6, nous utilisons:
        return $this->redirect($this->generateUrl('projet_symfony2_affichage_responsable_auto_ecole'));
    }

    public function ajoutAction() {
        //exécution de la méthode get qui est implémenté dans la classe mère Controller
        // appel au service request( objet) qui nous permet de récupérer la requète
        $request = $this->get('request');
        //instantiation de Modele
        $responsable = new ResponsableAutoEcole();
        //on test si la requete est porteuse de données ou non 
        if ($request->getMethod() == "POST") {
            //Recuperation des données
            $nom = $request->get('Nomresp');
            $prenom = $request->get('Prenomresp');
            
           
            $numCin = $request->get('NumèroCIN');
            $numTel = $request->get('NumèroTéléphone');
            $email = $request->get('Email');
            $password = $request->get('MotDePasse');
            //Remplissage de l'objet
            $responsable->setPrenom($prenom);
            $responsable->setNom($nom);
            $responsable->setNumCin($numCin);
            $responsable->setEmail($email);
            $responsable->setNumTel($numTel);
            
            $responsable->setPassword($password);
            //instantiation de l'em
            $em = $this->getDoctrine()->getManager();
            $em->persist($responsable);
            $em->flush();
        }
        return $this->render('ProjetSymfony2Bundle:Responsable_auto_ecole:ajouter_responsable.html.twig', array());
    }

    public function infResponsableAutoEcoleAction() {
        $em = $this->getDoctrine()->getManager();

        $responsable = $em->getRepository('ProjetSymfony2Bundle:ResponsableAutoEcole')->NbResponsableAutoEcoles();
   
        return $this->render('ProjetSymfony2Bundle:tableau:tableauDeBord.html.twig', array('responsable'=>intval($responsable)));
    }
    
    public function homeResAction() {


       $em = $this->getDoctrine()->getManager();

        $rdv = $em->getRepository("ProjetSymfony2Bundle:Rdv")->findAll();
        return $this->render("ProjetSymfony2Bundle:Home:homeResponsable.html.twig", array("rdvs" => $rdv));
    }

}
