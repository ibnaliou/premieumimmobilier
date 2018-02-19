<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\BienRepository")
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=50)
     */
    private $nomBien;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prixlocation", type="integer")
     */
    private $prixlocation;

    /**

   * @ORM\ManyToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(nullable=true)

   */

   private $BienParent;
   /**

  * @ORM\ManyToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Localite")

  * @ORM\JoinColumn(nullable=false)

  */

 private $Localite;
  /**

  * @ORM\ManyToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\TypeBien")

  * @ORM\JoinColumn(nullable=false)

  */

 private $TypeBien;
 
   /**
    * @ORM\OneToMany(targetEntity="PI\Premium_ImmobilierBundle\Entity\Image", mappedBy="bien")
    */
   private $images;

  
   
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
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
     * Set prixlocation
     *
     * @param integer $prixlocation
     *
     * @return Bien
     */
    public function setPrixlocation($prixlocation)
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }

    /**
     * Get prixlocation
     *
     * @return int
     */
    public function getPrixlocation()
    {
        return $this->prixlocation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set bienParent
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Bien $bienParent
     *
     * @return Bien
     */
    public function setBienParent(\PI\Premium_ImmobilierBundle\Entity\Bien $bienParent = null)
    {
        $this->BienParent = $bienParent;

        return $this;
    }

    /**
     * Get bienParent
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Bien
     */
    public function getBienParent()
    {
        return $this->BienParent;
    }

    /**
     * Set localite
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\PI\Premium_ImmobilierBundle\Entity\Localite $localite)
    {
        $this->Localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->Localite;
    }

    /**
     * Set typeBien
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\TypeBien $typeBien
     *
     * @return Bien
     */
    public function setTypeBien(\PI\Premium_ImmobilierBundle\Entity\TypeBien $typeBien)
    {
        $this->TypeBien = $typeBien;

        return $this;
    }

    /**
     * Get typeBien
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\TypeBien
     */
    public function getTypeBien()
    {
        return $this->TypeBien;
    }


    /**
     * Add image
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\PI\Premium_ImmobilierBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Image $image
     */
    public function removeImage(\PI\Premium_ImmobilierBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
