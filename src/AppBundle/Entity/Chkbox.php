<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chkbox
 *
 * @ORM\Table(name="tdk_chkbox")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChkboxRepository")
 */
class Chkbox
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
     * @ORM\Column(name="ime", type="string", length=255)
     */
    private $ime;

    /**
     * render checkbox
     *
     * @ORM\Column(name="prvi", type="boolean")
     */
    private $prvi;

    /**
     * render second checkbox
     *
     * @ORM\Column(name="drugi", type="boolean")
     */
    private $drugi;


    /**
     * Radio group or select
     *
     * @ORM\Column(name="isAttending", type="string")
     */
    private $isAttending;        

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
     * Set ime
     *
     * @param string $ime
     * @return Chkbox
     */
    public function setIme($ime)
    {
        $this->ime = $ime;

        return $this;
    }

    /**
     * Get ime
     *
     * @return string 
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set prvi
     *
     * @param boolean $prvi
     * @return Chkbox
     */
    public function setPrvi($prvi)
    {
        $this->prvi = $prvi;

        return $this;
    }

    /**
     * Get prvi
     *
     * @return boolean 
     */
    public function getPrvi()
    {
        return $this->prvi;
    }

    /**
     * Set drugi
     *
     * @param boolean $drugi
     * @return Chkbox
     */
    public function setDrugi($drugi)
    {
        $this->drugi = $drugi;

        return $this;
    }

    /**
     * Get drugi
     *
     * @return boolean 
     */
    public function getDrugi()
    {
        return $this->drugi;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Chkbox
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Chkbox
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set isAttending
     *
     * @param string $isAttending
     * @return Chkbox
     */
    public function setIsAttending($isAttending)
    {
        $this->isAttending = $isAttending;

        return $this;
    }

    /**
     * Get isAttending
     *
     * @return string 
     */
    public function getIsAttending()
    {
        return $this->isAttending;
    }
}
