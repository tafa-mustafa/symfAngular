<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_69E399D6F037AB0F", columns={"tel"})})
 * @ORM\Entity
 */
class Proprietaire
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
     * @ORM\Column(name="numPiece", type="string", length=25, nullable=false)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomComplet", type="string", length=20, nullable=false)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=20, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=30, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeBanque", type="string", length=50, nullable=true)
     */
    private $codebanque;


}
