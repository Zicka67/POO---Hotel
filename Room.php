<?php

class Room
{

    private string $name;
    private int $price;
    private int $nbBed;
    private $hotel;
    private $wifi; // Boolean ?
    private $disponibility; // Boolean ?
    private array $reservation;

    public function __construct($name, $price, $nbBed, $hotel)
    {
        $this->name = $name;
        $this->price = $price;
        $this->nbBed = $nbBed;
        $this->hotel = $hotel;
        $this->reservation = [];
    }

    // ******** GETTER / SETTER *********

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getNbBed()
    {
        return $this->nbBed;
    }


    public function setNbBed($nbBed)
    {
        $this->nbBed = $nbBed;

        return $this;
    }

    public function getHotel()
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    // ***** ADDRESERVATION *****

    public function addReservation($reservation)
    {
        $this->reservation[] = $reservation;
    }

    public function statusWifi()
    {
        if($this->disponibility == true)
            $this->disponibility = false;
        else {
            $this->disponibility = true;
        }
    }

    // ***** TOSTRING *****

    // public function __toString()
    // {
    //     return $this->name . $this->price . $this->nbBed . $this->hotel;
    // }

}

?>