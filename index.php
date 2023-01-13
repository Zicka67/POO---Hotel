<?php
// require "Hotel.php";
// require "Reservation.php";
// require "Room.php";
// require "User.php";

spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});



$hotel1 = new Hotel("HILTON **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel("REGENT **** Paris", "61 Rue Dauphine, 75006 Paris");

$user1 = new User("Murmann", "Micka", "Homme", "01-01-1988");
$user2 = new User("Gibello", "Virgile", "Homme", "02-02-1994");

$room1 = new Room("Chambre 1", 120, 2, $hotel1);
$room2 = new Room("Chambre 2", 120, 2, $hotel1);
$room3 = new Room("Chambre 3", 120, 2, $hotel1);
$room4 = new Room("Chambre 4", 120, 2, $hotel1);

$room16 = new Room("Chambre 16", 300, 2, $hotel1);
$room17 = new Room("Chambre 17", 300, 2, $hotel1);
$room18 = new Room("Chambre 18", 300, 2, $hotel1);
$room19 = new Room("Chambre 19", 300, 2, $hotel1);


$reservation1 = new Reservation($user2, "01-01-2021", "01-01-2021", $room17, $room1);
$reservation2 = new Reservation($user1, "11-03-2021", "11-03-2021", $room3, $room1);
$reservation3 = new Reservation($user1, "01-04-2021", "01-04-2021", $room4, $room1);

$room3->setWifi(true);

// var_dump($room3);
$hotel1->getHotelInfos();
// $hotel2->getHotelInfos();
echo "<br><br>";
$hotel1->getHotelReservation();
echo "<br><br>";
$hotel2->getHotelReservation();
echo "<br><br>";
// $hotel1->roomResumed();
$user1->getUserReservation();









?>