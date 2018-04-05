<?php
namespace App\Repository;


use App\Entity\Proreservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\TypeBien;
use App\Entity\Localite;
use App\Entity\Bien;
use App\Entity\Image;
use App\Entity\Reservation;
use App\Entity\Proprietaire;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\QueryBuilder;
/**
 * @method Proprietaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proprietaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proprietaire[]    findAll()
 * @method Proprietaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProreservationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Proreservation::class);
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
          public function lisReservation()
        {
            $dql = "SELECT pr,b,i FROM App\Entity\Proreservation pr
            left Join  pr.proprietaire p  Join  pr.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where pr.etat='0'";
            $query = $this->getEntityManager()->createQuery($dql);
    
            return $query->getResult();
        }
    
    
    
          public function findProreservationById($id)
        {
            $dql = "SELECT pr,b,i FROM App\Entity\Proreservation pr
            left Join  pr.proprietaire p  Join  pr.bien b Join  b.TypeBien t Join b.Localite l  Join b.images i where pr.id= :id";
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameter('id', $id);
            return $query->getResult();
        }


}