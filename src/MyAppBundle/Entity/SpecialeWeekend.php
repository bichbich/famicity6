<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 08/02/2017
 * Time: 15:43
 */

namespace MyAppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class SpecialeWeekend
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idWeekend;
    /**
     * @ORM\Column(type="datetime")
     */
    private $horaire;
    /**
     * @ORM\Column(type="date")
     */
    private $dateWeekend;
    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="SpecialeWeekend")
     * @ORM\JoinColumn(name="id_service", referencedColumnName="id_service")
     */
    private $weekendService;

    /**
     * @return mixed
     */
    public function getIdWeekend()
    {
        return $this->idWeekend;
    }

    /**
     * @param mixed $idWeekend
     */
    public function setIdWeekend($idWeekend)
    {
        $this->idWeekend = $idWeekend;
    }

    /**
     * @return mixed
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * @param mixed $horaire
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;
    }

    /**
     * @return mixed
     */
    public function getDateWeekend()
    {
        return $this->dateWeekend;
    }

    /**
     * @param mixed $dateWeekend
     */
    public function setDateWeekend($dateWeekend)
    {
        $this->dateWeekend = $dateWeekend;
    }

    /**
     * @return mixed
     */
    public function getWeekendService()
    {
        return $this->weekendService;
    }

    /**
     * @param mixed $weekendService
     */
    public function setWeekendService($weekendService)
    {
        $this->weekendService = $weekendService;
    }

}