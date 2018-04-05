<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TextContrat
 *
 * @ORM\Table(name="text_contrat")
 * @ORM\Entity
 */
class TextContrat
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
     * @ORM\Column(name="text", type="text", length=0, nullable=false)
     */
    private $text;


}
