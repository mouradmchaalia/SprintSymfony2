<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\EntityRepository;

class MoniteurRepository extends EntityRepository {

    public function NbMoniteurs() {


        $query = $this->getEntityManager()
                ->createQuery("SELECT count(m) as number FROM ProjetSymfony2Bundle:Moniteur m ");
                
        //  return $query->getResult();
        return $query->getResult()[0]['number'];
    }

}
