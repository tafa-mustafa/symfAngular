<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat", indexes={@ORM\Index(name="UNIQ_60349993BD95B80F", columns={"bien_id"}), @ORM\Index(name="UNIQ_6034999319EB6921", columns={"client_id"})})
 * @ORM\Entity
 */
class Contrat
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
     * @ORM\Column(name="dateContrat", type="date", nullable=false)
     */
    private $datecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="caution", type="string", length=30, nullable=false)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=false)
     */
    private $duree;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

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
