<?php

class Reservation
{
    private $user;
    private $dtStart;
    private $dtEnd;
    private $room;
    private $hotel; // Demander comment faire sans. (discussion Balthazar)
    
    public function __construct($user, $dtStart, $dtEnd, $room, $hotel)
    {
        $this->dtStart = $dtStart;
        $this->dtEnd = $dtEnd;

        $this->hotel = $hotel;
        $this->hotel->addReservation($this);
        $this->user = $user;
        $this->user->addReservation($this);
        
        $this->room = $room;
        $this->room->addReservation($this);
        $this->room->statusWifi($this);
        // $this->room->getHotel()->addReservation($this); // On appel getHotel() de l'objet $this->room, et donc renvoie l'objet hotel à la room actuel.
        // on appel addReservation() sur l'objet getHotel avec comme argument $this(qui est l'objet de réservation actuel)
        //Cela ajoute l'objet de réservation actuel ($this) au tab de reservation de l'hotel.
    }
    
    // ******** GETTER / SETTER *********
    
    public function getRoom()
    {
        return $this->room;
    }
    
    public function setRoom($room)
    {
        $this->room = $room;
        
        return $this;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function setUser($user)
    {
        $this->user = $user;
        
        return $this;
    }
    
    public function getDtEnd()
    {
        return $this->dtEnd;
    }
    
    public function setDtEnd($dtEnd)
    {
        $this->dtEnd = $dtEnd;
        
        return $this;
    }
    
    public function getDtStart()
    {
        return $this->dtStart;
    }
    
    public function setDtStart($dtStart)
    {
        $this->dtStart = $dtStart;
        
        return $this;
    }
    
    public function getHotel()
    {
        return $this->hotel;
    }
}
