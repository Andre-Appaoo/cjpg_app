<?php

namespace App\Repository;

use App\Entity\DrawEuromillions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DrawEuromillions>
 *
 * @method DrawEuromillions|null find($id, $lockMode = null, $lockVersion = null)
 * @method DrawEuromillions|null findOneBy(array $criteria, array $orderBy = null)
 * @method DrawEuromillions[]    findAll()
 * @method DrawEuromillions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrawEuromillionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DrawEuromillions::class);
    }

    //    /**
    //     * @return DrawEuromillions[] Returns an array of DrawEuromillions objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?DrawEuromillions
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
