<?php

namespace App\Repository;

use App\Entity\Snowflake;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Snowflake|null find($id, $lockMode = null, $lockVersion = null)
 * @method Snowflake|null findOneBy(array $criteria, array $orderBy = null)
 * @method Snowflake[]    findAll()
 * @method Snowflake[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SnowflakeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Snowflake::class);
    }

    // /**
    //  * @return Snowflake[] Returns an array of Snowflake objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Snowflake
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
