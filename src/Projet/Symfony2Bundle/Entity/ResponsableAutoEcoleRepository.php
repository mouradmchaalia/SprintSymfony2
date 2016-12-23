<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\EntityRepository;

class ResponsableAutoEcoleRepository extends EntityRepository {

    public function NbResponsableAutoEcoles() {


        $query = $this->getEntityManager()
                ->createQuery("SELECT count(r) as number FROM ProjetSymfony2Bundle:ResponsableAutoEcole r ");
                
        //  return $query->getResult();
        return $query->getResult()[0]['number'];
    }

}
