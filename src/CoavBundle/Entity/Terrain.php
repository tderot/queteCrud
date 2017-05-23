<?php

namespace CoavBundle\Entity;

/**
 * Terrain
 */
class Terrain
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $ica;
    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $longitude;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $country;

    public function __toString()
    {
        return $this->name;
    }

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Terrain
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get ica
     *
     * @return string
     */
    public function getIca()
    {
        return $this->ica;
    }

    /**
     * Set ica
     *
     * @param string $ica
     *
     * @return Terrain
     */
    public function setIca($ica)
    {
        $this->ica = $ica;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

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
     * Set city
     *
     * @param string $city
     *
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     *
     * @return Terrain
     */
    public function addDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures[] = $departure;

        return $this;
    }

    /**
     * Remove departure
     *
     * @param \WCS\CoavBundle\Entity\Flight $departure
     */
    public function removeDeparture(\WCS\CoavBundle\Entity\Flight $departure)
    {
        $this->departures->removeElement($departure);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartures()
    {
        return $this->departures;
    }
}
