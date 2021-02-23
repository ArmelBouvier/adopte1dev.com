<?php

namespace App\Repository;

use App\Entity\Remote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Remote|null find($id, $lockMode = null, $lockVersion = null)
 * @method Remote|null findOneBy(array $criteria, array $orderBy = null)
 * @method Remote[]    findAll()
 * @method Remote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Remote::class);
    }

    // /**
    //  * @return Remote[] Returns an array of Remote objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Remote
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
