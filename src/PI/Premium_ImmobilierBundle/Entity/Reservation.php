<?php

namespace PI\Premium_ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="PI\Premium_ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="date")
     */
    private $dateReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30)
     */
    private $etat;

     /**
   
      * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Bien")
   
      */
   
      private $bien;



 /**
   
      * @ORM\OneToOne(targetEntity="PI\Premium_ImmobilierBundle\Entity\Client")
   
      */
   
      private $client;

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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set bien
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Bien $bien
     *
     * @return Reservation
     */
    public function setBien(\PI\Premium_ImmobilierBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set client
     *
     * @param \PI\Premium_ImmobilierBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\PI\Premium_ImmobilierBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \PI\Premium_ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
