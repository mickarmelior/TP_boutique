<?php

namespace App\Repository;

use App\Entity\LignesdeCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LignesdeCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method LignesdeCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method LignesdeCommande[]    findAll()
 * @method LignesdeCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LignesdeCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LignesdeCommande::class);
    }

    // /**
    //  * @return LignesdeCommande[] Returns an array of LignesdeCommande objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LignesdeCommande
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
