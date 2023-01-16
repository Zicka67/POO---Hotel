<?php

class Room
{
    
    private string $name;
    private int $price;
    private int $nbBed;
    private $hotel;
    private bool $wifi; 
    private bool $disponibility; 
    private array $reservation;
    
    public function __construct($name, $price, $nbBed, $hotel)
    {
        $this->name = $name;
        $this->price = $price;
        $this->nbBed = $nbBed;
        
        $this->hotel = $hotel;
        $this->hotel->addRoom($this); 
        
        $this->disponibility = true;
        $this->reservation = [];
        $this->wifi = false;
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
    
    public function getWifi()
    {
        return $this->wifi;
    }
    
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        
        return $this;
    }
    
    public function getDisponibility() //countReservedRooms
    {
        return $this->disponibility;
    }
    
    public function setDisponibility($disponibility)
    {
        $this->disponibility = $disponibility;
        
        return $this;
    }
    
    // ***** ADDRESERVATION *****
    
    public function addReservation($reservation)
    {
        $this->reservation[] = $reservation;
    }
    
    // ***** DISPONIBILITYETAT *****
    
    public function disponibilityEtat()
    {
        if($this->disponibility == true)
            $this->disponibility = false;
        else {
            $this->disponibility == true;
        }
    }
    
    
}

?>