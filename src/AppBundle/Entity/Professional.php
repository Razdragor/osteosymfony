<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professional
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfessionalRepository")
 */
class Professional extends User
{

    /**
    * @var string
    *
    * @ORM\Column(name="price", type="decimal", precision=2, scale=0)
    */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="aggregation", type="text", nullable=true)
     */
    private $aggregation;

    /**
     * @var string
     *
     * @ORM\Column(name="qualifications", type="text", nullable=true)
     */
    private $qualifications;

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Professional
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set aggregation
     *
     * @param string $aggregation
     *
     * @return Professional
     */
    public function setAggregation($aggregation)
    {
        $this->aggregation = $aggregation;

        return $this;
    }

    /**
     * Get aggregation
     *
     * @return string
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * Set qualifications
     *
     * @param string $qualifications
     *
     * @return Professional
     */
    public function setQualifications($qualifications)
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    /**
     * Get qualifications
     *
     * @return string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }
}

