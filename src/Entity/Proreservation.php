<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Proreservation
 *
 * @ORM\Table(name="proreservation", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_92F5088DBD95B80F", columns={"bien_id"}), @ORM\UniqueConstraint(name="UNIQ_92F5088D76C50E4A", columns={"proprietaire_id"})})
 * @ORM\Entity
 */
class Proreservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="datetime", nullable=false)
     */
    private $datereservation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proprietaire_id", referencedColumnName="id")
     * })
     */
    private $proprietaire;

    /**
     * @var \Bien
     *
     * @ORM\ManyToOne(targetEntity="Bien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bien_id", referencedColumnName="id")
     * })
     */
    private $bien;


}
