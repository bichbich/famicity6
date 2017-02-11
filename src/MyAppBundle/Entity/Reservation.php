<?php


namespace MyAppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */

class Reservation
{
  /**
   * @ORM\Id()
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private $idReservation;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbPlacesDispo;
    /**
     * @ORM\Column(type="integer")
     */
    private $nbPlacesRestant;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $informationUser;
    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="Reservation")
     * @ORM\JoinColumn(name="id_service", referencedColumnName="id_service")
     */

    private $iService;

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @param mixed $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     * @return mixed
     */
    public function getNbPlacesDispo()
    {
        return $this->nbPlacesDispo;
    }

    /**
     * @param mixed $nbPlacesDispo
     */
    public function setNbPlacesDispo($nbPlacesDispo)
    {
        $this->nbPlacesDispo = $nbPlacesDispo;
    }

    /**
     * @return mixed
     */
    public function getNbPlacesRestant()
    {
        return $this->nbPlacesRestant;
    }

    /**
     * @param mixed $nbPlacesRestant
     */
    public function setNbPlacesRestant($nbPlacesRestant)
    {
        $this->nbPlacesRestant = $nbPlacesRestant;
    }

    /**
     * @return mixed
     */
    public function getInformationUser()
    {
        return $this->informationUser;
    }

    /**
     * @param mixed $informationUser
     */
    public function setInformationUser($informationUser)
    {
        $this->informationUser = $informationUser;
    }

    /**
     * @return mixed
     */
    public function getIdService()
    {
        return $this->iService;
    }

    /**
     * @param mixed $informationService
     */
    public function setIService($informationService)
    {
        $this->iService = $informationService;
    }

}
