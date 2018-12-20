<?php

namespace App\Repository;

use App\Entity\MainStats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MainStats|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainStats|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainStats[]    findAll()
 * @method MainStats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainStatsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MainStats::class);
    }

    // /**
    //  * @return MainStats[] Returns an array of MainStats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MainStats
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
