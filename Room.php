<?php

class Room 
{

private string $name;
private int $price;
private int $nbBed;
private $hotel;

public function __construct($name, $price, $nbBed, $hotel)
{
    $this->name = $name;
    $this->price = $price;
    $this->nbBed = $nbBed;
    $this->hotel = $hotel;
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




}


