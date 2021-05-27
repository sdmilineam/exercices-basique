<?php

namespace App\Repository;

use App\Entity\Random;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Random|null find($id, $lockMode = null, $lockVersion = null)
 * @method Random|null findOneBy(array $criteria, array $orderBy = null)
 * @method Random[]    findAll()
 * @method Random[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RandomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Random::class);
    }

    // /**
    //  * @return Random[] Returns an array of Random objects
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
    public function findOneBySomeField($value): ?Random
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
