<?php

class Reservation
{
    private $user;
    private $dtStart;
    private $dtEnd;
    private $room;

    public function __construct($user, $dtStart, $dtEnd, $room)
    {
        $this->dtStart = $dtStart;
        $this->dtEnd = $dtEnd;

        $this->user = $user;
        $this->user->addReservation($this);

        $this->room = $room;
        $this->room->addReservation($this);
        $this->room->statusWifi($this);
        $this->room->getHotel()->addReservation($this);
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

    // ***** TOSTRING *****

    public function __toString()
    {
        return $this->user . $this->dtStart . $this->dtEnd . $this->room;
    }


   
}
