<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Procontrat
 *
 * @ORM\Table(name="procontrat", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_3F05F247BD95B80F", columns={"bien_id"}), @ORM\UniqueConstraint(name="UNIQ_3F05F24776C50E4A", columns={"proprietaire_id"})})
 * @ORM\Entity
 */
class Procontrat
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
     * @ORM\Column(name="dateContrat", type="datetime", nullable=false)
     */
    private $datecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer", nullable=false)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255, nullable=false)
     */
    private $duree;

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
