<?php

namespace Ballack\TimeSheetBundle\Repository;

use Ballack\TimeSheetBundle\Entity\Employe;

/**
 * ProjetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjetRepository extends \Doctrine\ORM\EntityRepository {

    public function findMyProjets(Employe $employe) {
        
    }

    public function getNombreHeureWorkByEmpAndProjet($employe, $projet) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('sum(a.timestop - a.timeStart)')
                ->from('BallackTimeSheetBundle:Activite', 'a')
                ->where('a.employe = :employe')
                ->setParameter('employe', $employe)
                ->andWhere('a.projet = :projet')
                ->setParameter('projet', $projet);
        return $qb->getQuery()
                        ->getResult();
    }
public function getNombreHeureWorkByProjet($projet) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('sum(a.timestop - a.timeStart) as sommeDate')
                ->from('BallackTimeSheetBundle:Activite', 'a')
                ->andWhere('a.projet = :projet')
                ->setParameter('projet', $projet);
        return $qb->getQuery()
                        ->getSingleScalarResult();
    }
}
