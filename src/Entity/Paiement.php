<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Paiement
 *
 * @ORM\Table(name="paiement", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_B1DC7A1E1823061F", columns={"contrat_id"})})
 * @ORM\Entity
 */
class Paiement
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
     * @ORM\Column(name="datePaiement", type="date", nullable=false)
     */
    private $datepaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=20, nullable=false)
     */
    private $periode;

    /**
     * @var \Contrat
     *
     * @ORM\ManyToOne(targetEntity="Contrat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrat_id", referencedColumnName="id")
     * })
     */
    private $contrat;


}
