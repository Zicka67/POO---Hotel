<?php

class User
{
    
    private string $name;
    private string $firstName;
    private string$sexe;
    private string $dtBirth;
    private array $reservation;
    
    public function __construct($name, $firstName, $sexe, $dtBirth)
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->sexe = $sexe;
        $this->dtBirth = $dtBirth;
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
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        
        return $this;
    }
    
    public function getSexe()
    {
        return $this->sexe;
    }
    
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        
        return $this;
    }
    
    public function getDtBirth()
    {
        return $this->dtBirth;
    }
    
    public function setDtBirth($dtBirth)
    {
        $this->dtBirth = $dtBirth;
        
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
    
    // ***** COUNTRESERVED *****
    
    public function countReserved()
    {
        $i = 0;
        foreach ($this->reservation as $reservation) {
            $i++;
        }
        return $i;
    }
    
    // ***** ADDRESERVATION *****
    
    public function addReservation($reservation)
    {
        $this->reservation [] = $reservation;
    }
    
    public function getUserReservation()
    {
        echo "Réservation de l'utilisateur " . $this->getFirstName() . " " . $this->getName() . "<br>" .
        $this->countReserved() . "RESERVATION";
        // Pour afficher un S si countReserved() > 1
        if ($this->countReserved() > 1) {   
            echo "S";
        };
        
        $finalPrice = 0;
        
        foreach ($this->reservation as $reservation) 
        {
            echo $reservation->getHotel() . "<br>" . $reservation->getRoom()->getName() . " (" . $reservation->getRoom()->getNbBed() . "lit";
            if ($this->countReserved() > 1) {   
                echo "s";
            };
            echo " - " . $reservation->getRoom()->getPrice() . " €  - Wifi : ";
            if($reservation->getRoom()->statusWifi() == true)
            echo "oui";
            else
            {
                echo "non";
            }
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // ***** TOSTRING *****
    
    public function __toString()
    {
        return $this->name . $this->firstName;
    }
    
}

?>