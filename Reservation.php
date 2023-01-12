<?php

class Reservation
{

    private $dtStart;
    private $dtEnd;
    private $user;
    private $room;
    private $hotel; //A enlever ? 

    public function __construct($dtStart, $dtEnd, $user, $room, $hotel)
    {
        $this->dtStart = $dtStart;
        $this->dtEnd = $dtEnd;
        $this->user = $user;
        $this->room = $room;
        $this->hotel = $hotel;
    }

    // ******** GETTER / SETTER *********

    public function getHotel()
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

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




   
}


?>