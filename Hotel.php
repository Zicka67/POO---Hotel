<?php

class Hotel
{

    private string $name; 
    private array $room;
    private string $adress; 
    private array $reservation;

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

    // ***** ADDRESERVATION *****

    public function addReservation($reservation)
    {
        $this->reservation[] = $reservation;
    }

    // ***** ADDROOM *****

    public function addRoom($newRoom)
    {
        $this->room[] = $newRoom;
    }

    
        public function countReservedRooms()
    {
        $i = 0;
        foreach ($this->room as $room) {
            if ($room->getDisponibility() == false) {
                $i++;
            }
        }
        return $i;
    }
    
    // ***** COUNTROOM *****

    public function countRoom()
    {
        return count($this->room);
    }

    // ***** COUNTRESERVEDROOM *****

    public function countReservedRoom()
    {

    }

    // ***** TOSTRING *****

    public function __toString()
    {
        return $this->name . $this->adress;
    }








        // public function getRoom()
    // {
    //     $result =  "<br>" . $this . " fait parti de l'hotel Hilton : <br>";// la variable $result contient  " le joueur " . $this (l'objet courant) etc..
    //     foreach ($this->room as $room) // On parcours tous les elements (ici $club) de l'objet courant (ici le tab clubs)
    //     {
    //         $result .= "La chambre " . $room . "<br>"; // .= (concaténer) pour chaque element ($club) du tab, on l'ajoute a la var $result
    //     }
    //     return $result; 
    // }



}
