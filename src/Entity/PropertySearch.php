<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch{

    /**
     *
     * @var int|null
     */
    private $maxPrice;


    /**
     *@Assert\Range(min=10, max=400)
     * @var int|null
     */
    private $minSurface;

    /**
     *
     * @var int|null
     */
    private $minRooms;

    /**
     *
     * @var int|null
     */
    private $minBedrooms;

    /**
     * Get the value of maxPrice
     *
     * @return  int|null
     */ 
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Set the value of maxPrice
     *
     * @param  int|null  $maxPrice
     *
     * @return  self
     */ 
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int|null  $minSurface
     *
     * @return  self
     */ 
    public function setMinSurface($minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * Get the value of minRooms
     *
     * @return  int|null
     */ 
    public function getMinRooms()
    {
        return $this->minRooms;
    }

    /**
     * Set the value of minRooms
     *
     * @param  int|null  $minRooms
     *
     * @return  self
     */ 
    public function setMinRooms($minRooms)
    {
        $this->minRooms = $minRooms;

        return $this;
    }

    /**
     * Get the value of minBedrooms
     *
     * @return  int|null
     */ 
    public function getMinBedrooms()
    {
        return $this->minBedrooms;
    }

    /**
     * Set the value of minBedrooms
     *
     * @param  int|null  $minBedrooms
     *
     * @return  self
     */ 
    public function setMinBedrooms($minBedrooms)
    {
        $this->minBedrooms = $minBedrooms;

        return $this;
    }
}