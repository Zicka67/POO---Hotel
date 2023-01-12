<?php

class Hotel
{

    private $name; //
    private $room;
    private $adress; //
    private $reservation;

    public function __construct($name, $adress)
    {
        $this->name = $name;
        $this->room = []; // tab ?
        $this->adress = $adress;
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

    public function getRoom()
    {
        return $this->room;
    }

    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function getReservation()
    {
        return $this->reservation;
    }

    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }
}
