<?php

class Hotel
{
    
    private string $name; 
    private array $room;
    private string $adress; 
    private array $reservations;
    
    public function __construct($name, $adress)
    {
        $this->name = $name;
        $this->adress = $adress;
        
        $this->reservations = [];
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
    
    public function getReservations()
    {
        return $this->reservations;
    }
    
    public function setReservations($reservation)
    {
        $this->reservations = $reservation;
        
        return $this;
    }
    
    // ***** ADDRESERVATION *****
    
    public function addReservation($reservation)
    {
        $this->reservations[] = $reservation;
    }
    
    // ***** ADDROOM *****
    
    public function addRoom($newRoom)
    {
        $this->room[] = $newRoom; // On ajoute chaque newRoom au tab room
    }
    
    // ***** COUNTROOM *****
    
    public function countRooms()
    {
        return count($this->room); // Return le nbr d'éléments ajouter par la function addRoom dans le tab $this->room(dans le construct)
    }
    
    // ***** COUNTRESERVEDROOM *****
    
    public function countReserveRooms()
    {
        $i = 0; // En partant de 0, i = nbr de room réservée
        foreach ($this->room as $room) { // la boucle parcours tab $this->room 
            if ($room->getDisponibility() == false) { // pour chaque room ajoutée a ce tab elle va appeler getDisponibility, si la room = false
                $i++; // on incrémente $1 de 1
            }
        }
        return $i; //i = nbr de room réservée
    }
    
    // ***** GETHOTELINFO *****
    public function getHotelInfos()
    {
        $roomDispo = $this->countRooms() - $this->countReserveRooms();
        
        echo $this->getName() . "<br>" .
        $this->getAdress() . "<br>" .
        "Nombre de chambres : " . $this->countRooms() . "<br>" .
        "Nombre de chambres réservées : " . $this->countReserveRooms() . "<br>" .
        "Nombre de chambres dispo : " . $roomDispo;
    }
    
    public function getHotelReservation()
    {
        echo "Réservations de l'hôtel " . $this->getName() . "<br>";
        if ($this->countReserveRooms() > 1) {
            echo $this->countReserveRooms() . " RÉSERVATION";
            // rajouter un S au pluriel
            if ($this->countReserveRooms() > 1) {   
                echo "S";
            };
            foreach ($this->reservations as $reservation) {
                // echo "fzfz";
                // var_dump($reservation);
                echo "<br>" . $reservation->getUser()->getName() . " " . $reservation->getUser()->getfirstName()  . " " . $reservation->getRoom()->getName() . " - du " . $reservation->getDtStart() . " au " . $reservation->getDtEnd();
                if ($reservation->getRoom()->getDisponibility() == false) {
                }
            }
        } else {
            echo"Aucune réservation";
        }
    }

    
    
    
    // ***** TOSTRING *****
    
    public function __toString()
    {
        return $this->name . $this->adress;
    }
    
    
    
    
    
    
}
