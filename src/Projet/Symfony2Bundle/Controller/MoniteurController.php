<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Entity\Moniteur;
use Projet\Symfony2Bundle\Entity\Rdv;
class MoniteurController extends Controller {

    public function listAction() {

        $em = $this->getDoctrine()->getManager();

        $moniteur = $em->getRepository("ProjetSymfony2Bundle:Moniteur")->findAll();
         $request = $this->get('request');
      ////recherche
        if ($request->getMethod() == "POST") {
            $search = $request->get('search');

            $moniteur = $em->getRepository('ProjetSymfony2Bundle:Moniteur')->
                    findBy(array("nom" => $search));
        }
        return $this->render("ProjetSymfony2Bundle:Moniteur:liste_moniteurs.html.twig", array("moniteurs" => $moniteur));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $moniteur = $em->getRepository('ProjetSymfony2Bundle:Moniteur')->find($id);
        $em->remove($moniteur);
        $em->flush();

        //return $this->redirectToRoute("esprit_parc_Affichage_Modele");
        // Pour les versions qui précèdent la 2.6, nous utilisons:
        return $this->redirect($this->generateUrl('projet_symfony2_affichage_moniteur'));
    }

    public function ajoutAction() {
        //exécution de la méthode get qui est implémenté dans la classe mère Controller
        // appel au service request( objet) qui nous permet de récupérer la requète
        $request = $this->get('request');
        //instantiation de Modele
        $moniteur = new Moniteur();
        //on test si la requete est porteuse de données ou non 
        if ($request->getMethod() == "POST") {
            //Recuperation des données
            $nom = $request->get('NomMoniteur');
            $prenom = $request->get('PrenomMoniteur');
            $adresse = $request->get('Adresse');
            $date_de_naissance = $request->get('DateDeNaissance');
            $num_cin = $request->get('NumèroCIN');
            $num_tel = $request->get('NumèroTéléphone');
            $email = $request->get('Email');
            $password = $request->get('MotDePasse');
            //Remplissage de l'objet
            $moniteur->setPrenom($prenom);
            $moniteur->setNom($nom);
            $moniteur->setNum_cin($num_cin);
            $moniteur->setEmail($email);
            $moniteur->setNum_tel($num_tel);
            $moniteur->setAdresse($adresse);
            $moniteur->setDate_de_naissance($date_de_naissance);
            
            $moniteur->setPassword($password);
            //instantiation de l'em
            $em = $this->getDoctrine()->getManager();
            $em->persist($moniteur);
            $em->flush();
        }
        return $this->render('ProjetSymfony2Bundle:Moniteur:ajouter_moniteur.html.twig', array());
    }

    public function infMoniteurAction() {
        $em = $this->getDoctrine()->getManager();

        $moniteur = $em->getRepository('ProjetSymfony2Bundle:Moniteur')->NbMoniteurs();
   
        return $this->render('ProjetSymfony2Bundle:tableau:tableauDeBord.html.twig', array('moniteur'=>intval($moniteur)));
    }
    
    public function homeMonAction() {


        $em = $this->getDoctrine()->getManager();

        $rdv = $em->getRepository("ProjetSymfony2Bundle:Rdv")->findAll();
        return $this->render("ProjetSymfony2Bundle:Home:homeMoniteur.html.twig", array("rdvs" => $rdv));
        
        
        
    }
    public function deleteRdvAction($id) {
        $em = $this->getDoctrine()->getManager();
        $rdv = $em->getRepository('ProjetSymfony2Bundle:Rdv')->find($id);
       // $EMAIL=$candidat->getEmail();
        $em->remove($rdv);
        $em->flush();
        
        //envoi mail
        
//        $message = \Swift_Message::newInstance()
//                        ->setSubject('Suppression de compte')
//                        ->setFrom(array('malleksaif444@gmail.com' => "permik"))
//                        ->setTo($EMAIL)
//                        ->setCharset('utf-8')
//                        ->setContentType('text/html')
//                        ->setBody($this->renderView('ProjetSymfony2Bundle:Mail:sendMail.html.twig',array()));
//                
//                $this->get('mailer')->send($message);
//                
//                            

        //return $this->redirectToRoute("esprit_parc_Affichage_Modele");
        // Pour les versions qui précèdent la 2.6, nous utilisons:
        return $this->redirect($this->generateUrl('homeMon'));
    }
    public function ajoutRdvAction() {
        //exécution de la méthode get qui est implémenté dans la classe mère Controller
        // appel au service request( objet) qui nous permet de récupérer la requète
        $request = $this->get('request');
        //instantiation de Modele
        $rdv = new Rdv();
        //on test si la requete est porteuse de données ou non 
        if ($request->getMethod() == "POST") {
            //Recuperation des données
            $lieu = $request->get('Lieu');
            $date = $request->get('Date');
            $nbreHeure = $request->get('nb');
            
            //Remplissage de l'objet
            $rdv->setPrenom($lieu);
            $rdv->setNom($date);
            $rdv->setNum_cin($nbreHeure);
           
            //instantiation de l'em
          
            $em->persist($rdv);
            $em->flush();
        }
        return $this->render('ProjetSymfony2Bundle:Rdv:ajouter_rdv.html.twig', array());
         
        //return $this->render('ProjetSymfony2Bundle:Candidat:new.html.twig', array());

    }

   

}
