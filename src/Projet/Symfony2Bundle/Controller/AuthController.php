<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Projet\Symfony2Bundle\Entity\Candidat;
use Projet\Symfony2Bundle\Entity\Rdv;
use Projet\Symfony2Bundle\Entity\Moniteur;

class AuthController extends Controller {

    public function lockAdAction(Request $request) {

        if ($request->getMethod() == "POST") {

            $password = $request->get('Password');
            $email = $request->get('Email');

            $em = $this->getDoctrine()->getManager();


            $rdv = $em->getRepository("ProjetSymfony2Bundle:Rdv")->findAll();

            $repository = $em->getRepository("ProjetSymfony2Bundle:Candidat");
            $user = $repository->findOneBy(array('password' => $password,
                'email' => $email
            ));

            $repository2 = $em->getRepository("ProjetSymfony2Bundle:Moniteur");
            $user2 = $repository2->findOneBy(array('password' => $password,
                'email' => $email
            ));
            $repository3 = $em->getRepository("ProjetSymfony2Bundle:ResponsableAutoEcole");
            $user3 = $repository3->findOneBy(array('password' => $password,
                'email' => $email
            ));
            if ($user) {


                return $this->render("ProjetSymfony2Bundle:Rdv:listRdvCandidat.html.twig", array("rdvs" => $rdv));
            } 

          else 
              if ($user2) {


                return $this->render("ProjetSymfony2Bundle:Home:homeMoniteur.html.twig", array("rdvs" => $rdv));
            }
            else 
              if ($user3) {


                return $this->render("ProjetSymfony2Bundle:Home:homeResponsable.html.twig", array("rdvs" => $rdv));
              }
            else {

                return $this->render('ProjetSymfony2Bundle:Auth:index.html.twig', array());
            }
        }




        return $this->render('ProjetSymfony2Bundle:Auth:index.html.twig', array());


        /*

         *     
          $repository1 = $em->getRepository("ProjetSymfony2Bundle:Moniteur");
          $user1 = $repository1->findOneBy(array('password' => $password,'email' => $email
          ));
          if ($user1) {


          return $this->render("ProjetSymfony2Bundle:Home:homeMoniteur.html.twig", array("rdvs" => $rdv));
          }else  {

          return $this->render('ProjetSymfony2Bundle:Auth:index.html.twig', array());

          }

          $repository2 = $em->getRepository("ProjetSymfony2Bundle:Responsable");
          $user2 = $repository2->findOneBy(array('password' => $password,'email' => $email
          ));
          if ($user2) {


          return $this->render("ProjetSymfony2Bundle:Home:homeResponsable.html.twig", array("rdvs" => $rdv));
          }else  {

          return $this->render('ProjetSymfony2Bundle:Auth:index.html.twig', array());

          } */
    }

}
