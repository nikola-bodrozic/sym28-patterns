<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Soba
 *
 * @ORM\Table(name="tdk_soba")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SobaRepository")
 */
class Soba
{
  /**
   *
   * @ORM\ManyToOne(targetEntity="Zgrada", inversedBy="sobe")
   * @ORM\JoinColumn(name="zgrada_id", referencedColumnName="id")
   */
   private $zgrada;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="imesobe", type="string")
     */
    private $imesobe;

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
     * Set zgrada
     *
     * @param \AppBundle\Entity\Zgrada $zgrada
     * @return Soba
     */
    public function setZgrada(\AppBundle\Entity\Zgrada $zgrada = null)
    {
        $this->zgrada = $zgrada;

        return $this;
    }

    /**
     * Get zgrada
     *
     * @return \AppBundle\Entity\Zgrada
     */
    public function getZgrada()
    {
        return $this->zgrada;
    }

    /**
     * Set imesobe
     *
     * @param string $imesobe
     * @return Soba
     */
    public function setImesobe($imesobe)
    {
        $this->imesobe = $imesobe;

        return $this;
    }

    /**
     * Get imesobe
     *
     * @return string
     */
    public function getImesobe()
    {
        return $this->imesobe;
    }
}
