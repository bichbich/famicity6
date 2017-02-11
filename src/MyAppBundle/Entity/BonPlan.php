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
class BonPlan
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPlan;
    /**
     * @ORM\Column(type="date")
     */
    private $dateDebutPlan;
    /**
     * @ORM\Column(type="date")
     */
    private $dateFinPlan;
    /**
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="SpecialeWeekend")
     * @ORM\JoinColumn(name="id_service", referencedColumnName="id_service")
     */
    private $planService;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellePlan;
    /**
     * @return mixed
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * @param mixed $idPlan
     */
    public function setIdPlan($idPlan)
    {
        $this->idPlan = $idPlan;
    }

    /**
     * @return mixed
     */
    public function getDateDebutPlan()
    {
        return $this->dateDebutPlan;
    }

    /**
     * @param mixed $dateDebutPlan
     */
    public function setDateDebutPlan($dateDebutPlan)
    {
        $this->dateDebutPlan = $dateDebutPlan;
    }

    /**
     * @return mixed
     */
    public function getDateFinPlan()
    {
        return $this->dateFinPlan;
    }

    /**
     * @param mixed $dateFinPlan
     */
    public function setDateFinPlan($dateFinPlan)
    {
        $this->dateFinPlan = $dateFinPlan;
    }

    /**
     * @return mixed
     */
    public function getPlanService()
    {
        return $this->planService;
    }

    /**
     * @param mixed $planService
     */
    public function setPlanService($planService)
    {
        $this->planService = $planService;
    }

    /**
     * @return mixed
     */
    public function getLibellePlan()
    {
        return $this->libellePlan;
    }

    /**
     * @param mixed $libellePlan
     */
    public function setLibellePlan($libellePlan)
    {
        $this->libellePlan = $libellePlan;
    }


}