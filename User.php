<?php

class User
{
    
    private string $name;
    private string $firstName;
    private string $sexe;
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
    
    // ***** ADDRESERVATION *****
    
    public function addReservation($reservation)
    {
        $this->reservation [] = $reservation;
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
    
    // ***** GETUSERRESERVATION *****
    
    public function getUserReservation()
    {
        echo "<h1><u>" . "Réservation de l'utilisateur " . $this->getFirstName() . " " . $this->getName() . "</u></h1>" . "<br>" .
        "<h2 class=green>" . $this->countReserved() . " RESERVATION";
        // Pour afficher un S si countReserved() > 1
        if ($this->countReserved() > 1) {   
            echo "S" . "</h2>";
        };
        
        $finalPrice = 0;
        
        foreach ($this->reservation as $reservation) // pour chaque reservation dans le tab reservation
        {
            // On affiche l'hotel, la chambre et le nb de lit
            echo "<h2 class=h2modif>" . "<br>" . $reservation->getHotel()->getName() . " " . $reservation->getRoom()->getName() . " ( " . $reservation->getRoom()->getNbBed() . " lit";
            // Pour rajouter un S (comme dans hotel)
            if ($this->countReserved() > 1) {   
                echo "s";
            };
            // on affiche le prix et le wifi
            echo " - " . $reservation->getRoom()->getPrice() . " €  - Wifi : ";
            // si le status et TRUE
            if($reservation->getRoom()->disponibilityEtat() == true)
            echo "oui";
            else // Sinon 
            {
                echo "non";
            }
            echo ") du " . $reservation->getDtStart() . " au " . $reservation->getDtend()  . "</h2>";
            //PHP 2 - exo 15 date_creation + dateDif
            $date1 = date_create($reservation->getDtStart());
            $date2 = date_create($reservation->getDtEnd());
            $dateDif = date_diff($date1 ,$date2);
            // var_dump($dateDif);
            // += pour 
            $finalPrice += $dateDif->format("%d") * $reservation->getRoom()->getPrice(); // finalPrice = $dateDif(en jour) * le prix de $reservation
        }
        echo "<br>" . "<h2 class=priceMargin>" . "Total : " . $finalPrice . " €" . "</h2>";
    }
    
    // ***** TOSTRING *****
    
    public function __toString()
    {
        return $this->name . $this->firstName;
    }
    
}

?>