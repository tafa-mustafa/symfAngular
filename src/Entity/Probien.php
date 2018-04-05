<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Probien
 *
 * @ORM\Table(name="probien")
 * @ORM\Entity
 */
class Probien
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
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=255, nullable=false)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="type_bien", type="string", length=255, nullable=false)
     */
    private $typeBien;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=255, nullable=false)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;


}
