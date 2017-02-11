<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 08/02/2017
 * Time: 16:57
 */

namespace MyAppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idReclamation;

    /**
     * @ORM\Column(type="string")
     */
    private $sujet;
    /**
     * @ORM\Column(type="string")
     */
    private $nature;
    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @return mixed
     */
    public function getIdReclamation()
    {
        return $this->idReclamation;
    }

    /**
     * @param mixed $idReclamation
     */
    public function setIdReclamation($idReclamation)
    {
        $this->idReclamation = $idReclamation;
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * @param mixed $nature
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }



}