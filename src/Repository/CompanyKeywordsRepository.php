<?php

namespace App\Repository;

use App\Entity\CompanyKeywords;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CompanyKeywords|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyKeywords|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyKeywords[]    findAll()
 * @method CompanyKeywords[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyKeywordsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompanyKeywords::class);
    }

    // /**
    //  * @return CompanyKeywords[] Returns an array of CompanyKeywords objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompanyKeywords
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
