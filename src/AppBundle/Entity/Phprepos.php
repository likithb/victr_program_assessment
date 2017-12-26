<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phprepos
 *
* @ORM\Table(name="phprepos", options={"collate":"utf8mb4_general_ci", "charset":"utf8mb4"})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhpreposRepository")
 */
class Phprepos
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
     * @ORM\Column(name="repositoryID", type="integer")
     */
    private $repositoryID;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastPushDate", type="datetime")
     */
    private $lastPushDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="stars", type="integer")
     */
    private $stars;


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
     * Set repositoryID
     *
     * @param integer $repositoryID
     *
     * @return Phprepos
     */
    public function setRepositoryID($repositoryID)
    {
        $this->repositoryID = $repositoryID;

        return $this;
    }

    /**
     * Get repositoryID
     *
     * @return int
     */
    public function getRepositoryID()
    {
        return $this->repositoryID;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Phprepos
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Phprepos
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Phprepos
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set lastPushDate
     *
     * @param \DateTime $lastPushDate
     *
     * @return Phprepos
     */
    public function setLastPushDate($lastPushDate)
    {
        $this->lastPushDate = $lastPushDate;

        return $this;
    }

    /**
     * Get lastPushDate
     *
     * @return \DateTime
     */
    public function getLastPushDate()
    {
        return $this->lastPushDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Phprepos
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set stars
     *
     * @param integer $stars
     *
     * @return Phprepos
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return int
     */
    public function getStars()
    {
        return $this->stars;
    }
}

