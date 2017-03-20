<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeziersTrombiBw
 *
 * @ORM\Table(name="beziers_trombi_bw", indexes={@ORM\Index(name="promo", columns={"promo"})})
 * @ORM\Entity
 */
class BeziersTrombiBw
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_git", type="string", length=255, nullable=false)
     */
    private $lienGit;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_portfolio", type="string", length=255, nullable=false)
     */
    private $lienPortfolio;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Application\Entity\BeziersPromosBw
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\BeziersPromosBw")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promo", referencedColumnName="id")
     * })
     */
    private $promo;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return BeziersTrombiBw
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return BeziersTrombiBw
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set lienGit
     *
     * @param string $lienGit
     *
     * @return BeziersTrombiBw
     */
    public function setLienGit($lienGit)
    {
        $this->lienGit = $lienGit;

        return $this;
    }

    /**
     * Get lienGit
     *
     * @return string
     */
    public function getLienGit()
    {
        return $this->lienGit;
    }

    /**
     * Set lienPortfolio
     *
     * @param string $lienPortfolio
     *
     * @return BeziersTrombiBw
     */
    public function setLienPortfolio($lienPortfolio)
    {
        $this->lienPortfolio = $lienPortfolio;

        return $this;
    }

    /**
     * Get lienPortfolio
     *
     * @return string
     */
    public function getLienPortfolio()
    {
        return $this->lienPortfolio;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return BeziersTrombiBw
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set promo
     *
     * @param \Application\Entity\BeziersPromosBw $promo
     *
     * @return BeziersTrombiBw
     */
    public function setPromo(\Application\Entity\BeziersPromosBw $promo = null)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return \Application\Entity\BeziersPromosBw
     */
    public function getPromo()
    {
        return $this->promo;
    }
}
