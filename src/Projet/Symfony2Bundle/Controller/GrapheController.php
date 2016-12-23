<?php

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

class GrapheController extends Controller {

    public function chartPieAction() {
      $em = $this->getDoctrine()->getManager();

        $candidat = $em->getRepository('ProjetSymfony2Bundle:Candidat')->NbCandidats();
        $moniteur = $em->getRepository('ProjetSymfony2Bundle:Moniteur')->NbMoniteurs();
        $responsable = $em->getRepository('ProjetSymfony2Bundle:ResponsableAutoEcole')->NbResponsableAutoEcoles();

        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Partition des utilisateurs');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Candidat', intval($candidat)),
            array('Moniteur', intval($moniteur)),
            array('Responsable', intval($responsable)),
           
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        return $this->render('ProjetSymfony2Bundle:Graphe:pie.html.twig', array(
                    'chart' => $ob
        ));
    }

}
