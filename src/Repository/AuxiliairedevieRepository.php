<?php

namespace App\Repository;

use App\Entity\Auxiliairedevie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Auxiliairedevie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Auxiliairedevie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Auxiliairedevie[]    findAll()
 * @method Auxiliairedevie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuxiliairedevieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Auxiliairedevie::class);
    }

    // /**
    //  * @return Auxiliairedevie[] Returns an array of Auxiliairedevie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Auxiliairedevie
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
