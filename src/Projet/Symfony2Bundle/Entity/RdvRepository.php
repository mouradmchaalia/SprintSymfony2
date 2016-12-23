<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class RdvRepository extends EntityRepository {

    public function findByRDV() { 
        
 $qb= $this-> createQueryBuilder()->
          select('r.lieu, r.date,r.nbreHeure
c.nom, m.prenom')
->from('Rdv r')
 ->leftJoin('r.Candidat c')
 ->leftJoin('r.Moniteur m');
return $qb->getQuery()->getResult();
           
        }
    }
    