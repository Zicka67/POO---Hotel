<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="styles.css">

<title>Document</title>

</head>
<body>

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
        
        echo "<h1>" . $this->getName() . "</h1>" . "<br>" .
        "<h2>" . $this->getAdress() . "</h2>" . "<br>" .
        "<h2>" . "Nombre de chambres : " . $this->countRooms() . "</h2>" . "<br>" .
        "<h2>" . "Nombre de chambres réservées : " . $this->countReserveRooms() . "</h2>" . "<br>" .
        "<h2>" . "Nombre de chambres dispo : " . $roomDispo . "</h2>";
    }
    
    // ***** GETHOTELRESERVATION *****
    
    public function getHotelReservation()
    {
        echo "<h1>" . "Réservations de l'hôtel " . $this->getName() . "</h1>" . "<br>";
        if ($this->countReserveRooms() > 1) {
            echo "<h2 class=green>" . $this->countReserveRooms() . " RÉSERVATION"  ;
            // rajouter un S au pluriel
            if ($this->countReserveRooms() > 1) {  
                echo "S" . "</h2>";
            };
            foreach ($this->reservations as $reservation) {
                // echo "fzfz";
                // var_dump($reservation);
                echo "<br>" . "<h2 class=h2bis>" . $reservation->getUser()->getName() . " " . $reservation->getUser()->getfirstName()  . " " . $reservation->getRoom()->getName() . " - du " . $reservation->getDtStart() . " au " . $reservation->getDtEnd() . "</h2>";
                if ($reservation->getRoom()->getDisponibility() == false) {
                }
            }
        } else {
            echo "<h2>" . "Aucune réservation" . "</h2>" ;
        }
    }
    
    public function tabResumedRooms()
    {
        $grey = array("Chambre 1", "Chambre 3", "Chambre 16", "Chambre 18");

        echo "<h1>Status des chambres de " . $this->getName() . "</h1>" .
        "<table>
        <thead>
        <tr>
        <th class=padding1>CHAMBRE</th>
        <th class=padding2>PRIX</th>
        <th class=padding3>WIFI</th>
        <th class=padding4>ETAT</th>
        </tr>
        </thead><tbody>";
        foreach($this->room as $room)
        {
            if(in_array($room->getName(), $grey)){
                echo "<tr class='grey'>";
            }else{
                 echo "<tr>";
            }
            echo "<td>"
            .$room->getName() .
            "</td>
            <td class=price>"
            .$room->getPrice() . " €" .
            "</td>
            <td class=img>";
            if ($room->getWifi() == true)
            {
                echo '<a class=img href="img\signal-wifi.png" target=_blank>Logo!</a>';// https://www.flaticon.com/fr/icone-gratuite/signal-wifi_1176875?term=wifi&page=1&position=1&origin=tag&related_id=1176875
                }
                echo "</td>
                <td>";
                if ($room->getDisponibility() == true)
                {
                    
                    // echo var_dump($room->getDisponibility()); // test de getDisponibility
                    echo '<p class=green2>Disponible</p>';
                } else 
                {
                    
                    echo '<p class=red>Réservée</p>';
                }
                echo "</td>
                </tr>";
            }
            echo "</tbody></table>";
        }
        
        // ***** TOSTRING *****
        
        public function __toString()
        {
            return $this->name . $this->adress;
        }
        
    }
    
    ?>
    </body>
    </html>
    
