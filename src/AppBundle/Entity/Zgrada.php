<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Zgrada
 *
 * @ORM\Table(name="tdk_zgrada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ZgradaRepository")
 */
class Zgrada
{
  /**
   *
   * @ORM\OneToMany(targetEntity="Soba", mappedBy="zgrada")
   */
  private $sobe;

  public function __construct()
  {
      $this->sobe = new ArrayCollection();
  }

  public function __toString()
  {
      return $this->ime;
  }
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
     * @return Zgrada
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
     * Add sobe
     *
     * @param \AppBundle\Entity\Soba $sobe
     * @return Zgrada
     */
    public function addSobe(\AppBundle\Entity\Soba $sobe)
    {
        $this->sobe[] = $sobe;
        return $this;
    }

    /**
     * Remove sobe
     *
     * @param \AppBundle\Entity\Soba $sobe
     */
    public function removeSobe(\AppBundle\Entity\Soba $sobe)
    {
        $this->sobe->removeElement($sobe);
    }

    /**
     * Get sobe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSobe()
    {
        return $this->sobe;
    }
}
