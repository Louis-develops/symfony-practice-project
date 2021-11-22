<?php

namespace App\Repository;

use App\Entity\Superheros;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Superheros|null find($id, $lockMode = null, $lockVersion = null)
 * @method Superheros|null findOneBy(array $criteria, array $orderBy = null)
 * @method Superheros[]    findAll()
 * @method Superheros[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuperherosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Superheros::class);
    }

    // /**
    //  * @return Superheros[] Returns an array of Superheros objects
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
    public function findOneBySomeField($value): ?Superheros
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
