<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\TypeBien;
use App\Entity\Localite;
use App\Entity\Bien;
use App\Entity\Image;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function countReservation($idbien){
        $qb = $this
        ->createQueryBuilder('r')
        ->select('COUNT(r)')
        ->where('r.bien_id = :idbien')
        ->setParameter('idbien',$idbien);
        return $qb
        ->getQuery()
        ->getSingleScalarResult();
        }
    
    
         /** Touver la list des reservations */
          public function listReservation()
        {
            $dql = "SELECT r,b,i FROM App\Entity\Reservation r
            left Join  r.client c  Join  r.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where r.etat='0' and b.etat='1' ";
            $query = $this->getEntityManager()->createQuery($dql);
    
            return $query->getResult();
        }
    
    
    
          public function findReservationById($id)
        {
            $dql = "SELECT r,b,i FROM App\Entity\Reservation r
            left Join  r.client c  Join  r.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where r.id= :id";
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameter('id', $id);
            return $query->getResult();
        }
//    /**
//     * @return Reservation[] Returns an array of Reservation objects
//     */
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
    public function findOneBySomeField($value): ?Reservation
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
