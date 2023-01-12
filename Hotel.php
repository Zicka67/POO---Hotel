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
        $this->adress = $adress;

        $this->reservation = [];
        $this->room = []; 
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

    // ***** COUNTROOM *****

    public function countRooms()
    {
        return count($this->room);
    }

    // ***** COUNTRESERVEDROOM *****

        public function countReserveRooms()
    {
        $i = 0;
        foreach ($this->room as $room) {
            if ($room->getDisponibility() == false) {
                $i++;
            }
        }
        return $i;
    }

    // ***** GETHOTELINFO *****
    public function getHotelInfos()
    {
        $roomDispo = $this->countRooms() - $this->countReserveRooms();

        echo $this->getName() . ": " . "<br>" . $this->getAdress() . "<br>" . "
            Nb de chambres : " . $this->countRooms() . "<br>" . " Nb de chambres dispo : " . $this->countReserveRooms()
            . "<br>" . "Nb de chambres reservées : " . $roomDispo;
    }

     // ***** TOSTRING *****

     public function __toString()
     {
         return $this->name . $this->adress;
     }






}
