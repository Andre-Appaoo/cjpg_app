<?php

namespace App\Repository;

use App\Entity\UserDrawEuromillions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserDrawEuromillions>
 *
 * @method UserDrawEuromillions|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserDrawEuromillions|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserDrawEuromillions[]    findAll()
 * @method UserDrawEuromillions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserDrawEuromillionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserDrawEuromillions::class);
    }

    //    /**
    //     * @return UserDrawEuromillions[] Returns an array of UserDrawEuromillions objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?UserDrawEuromillions
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
