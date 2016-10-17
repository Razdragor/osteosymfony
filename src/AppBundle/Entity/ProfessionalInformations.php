<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfessionalInformations
 *
 * @ORM\Table(name="professional_informations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfessionalInformationsRepository")
 */
class ProfessionalInformations
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", unique=true)
     */
    private $userId;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return ProfessionalInformations
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return ProfessionalInformations
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
     * @return ProfessionalInformations
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
     * @return ProfessionalInformations
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

