<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Proimage
 *
 * @ORM\Table(name="proimage", indexes={@ORM\Index(name="IDX_4838C136BD95B80F", columns={"bien_id"})})
 * @ORM\Entity
 */
class Proimage
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
     * @ORM\Column(name="image", type="blob", length=0, nullable=false)
     */
    private $image;

    /**
     * @var \Probien
     *
     * @ORM\ManyToOne(targetEntity="Probien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bien_id", referencedColumnName="id")
     * })
     */
    private $bien;


}
