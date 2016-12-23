<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Entity\Candidat;


class CandidatController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();

        $candidat = $em->getRepository("ProjetSymfony2Bundle:Candidat")->findAll();

        $request = $this->get('request');
        ////recherche
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');

            $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->
                    findBy(array("nom" => $search));
        }


        return $this->render("ProjetSymfony2Bundle:Candidat:liste_candidats.html.twig", array("candidats" => $candidat));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->find($id);
        $EMAIL=$candidat->getEmail();
        $em->remove($candidat);
        $em->flush();
        
        //envoi mail
        
        $message = \Swift_Message::newInstance()
                        ->setSubject('Suppression de compte')
                        ->setFrom(array('malleksaif444@gmail.com' => "permik"))
                        ->setTo($EMAIL)
                        ->setCharset('utf-8')
                        ->setContentType('text/html')
                        ->setBody($this->renderView('ProjetSymfony2Bundle:Mail:sendMail.html.twig',array()));
                
                $this->get('mailer')->send($message);
                
                            

        //return $this->redirectToRoute("esprit_parc_Affichage_Modele");
        // Pour les versions qui précèdent la 2.6, nous utilisons:
        return $this->redirect($this->generateUrl('projet_symfony2_affichage_candidat'));
    }

    public function ajoutAction() {
        //exécution de la méthode get qui est implémenté dans la classe mère Controller
        // appel au service request( objet) qui nous permet de récupérer la requète
        $request = $this->get('request');
        //instantiation de Modele
        $candidat = new Candidat();
        //on test si la requete est porteuse de données ou non 
        if ($request->getMethod() == "POST") {
            //Recuperation des données
            $nom = $request->get('NomCandidat');
            $prenom = $request->get('PrenomCandidat');
            $adresse = $request->get('Adresse');
            $date_de_naissance = $request->get('DateDeNaissance');
            $num_cin = $request->get('NumèroCIN');
            $num_tel = $request->get('NumèroTéléphone');
            $email = $request->get('Email');
            $password = $request->get('MotDePasse');
            //Remplissage de l'objet
            $candidat->setPrenom($prenom);
            $candidat->setNom($nom);
            $candidat->setNum_cin($num_cin);
            $candidat->setEmail($email);
            $candidat->setNum_tel($num_tel);
            $candidat->setAdresse($adresse);
            $candidat->setDate_de_naissance($date_de_naissance);
            $candidat->setPassword($password);
            //instantiation de l'em
          
            $em->persist($candidat);
            $em->flush();
        }
        return $this->render('ProjetSymfony2Bundle:Candidat:ajouter_candidat.html.twig', array());
         
        //return $this->render('ProjetSymfony2Bundle:Candidat:new.html.twig', array());

    }

   public function infCandidatAction() {
     
        $em = $this->getDoctrine()->getManager();

        $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->NbCandidats();
        $moniteur = $em->getRepository('ProjetSymfony2Bundle:Moniteur')->NbMoniteurs();
        $responsable = $em->getRepository('ProjetSymfony2Bundle:ResponsableAutoEcole')->NbResponsableAutoEcoles();

   
        return $this->render('ProjetSymfony2Bundle:tableau:tableauDeBord.html.twig', array('candidat'=>intval($candidat),
            
            'moniteur'=>intval($moniteur),'responsable'=>intval($responsable)
            ));
    }
    
public function homeCanAction() {


        return $this->render('ProjetSymfony2Bundle:Candidat:homeCandidat.html.twig');
        
    }
    
    
    
   
    
}
