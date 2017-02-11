<?php
/**
 * Created by PhpStorm.
 * User: wister
 * Date: 09/02/2017
 * Time: 12:48
 */

namespace MyAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM ;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * @ORM\Entity
 */
class Famille
{
    /**
     * @ORM\GeneratedValue()
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @return mixed
     */
    public function getNomdeFamille()
    {
        return $this->NomdeFamille;
    }

    /**
     * @param mixed $NomdeFamille
     */
    public function setNomdeFamille($NomdeFamille)
    {
        $this->NomdeFamille = $NomdeFamille;
    }
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @JoinColumn(name="NomdeFamilleid", referencedColumnName="id")
     */
    private $NomdeFamille;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */


    /**
     * @return mixed
     */



}