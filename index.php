<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});


$hotel1 = New Hotel("HILTON **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = New Hotel("REGENT **** Paris", "61 Rue Dauphine, 75006 Paris");

$user1 = New User("Murmann", "Micka", "Homme", "01-01-1988");
$user2 = New User("Gibello", "Virgile", "Homme", "02-02-1994");

$room1 = New Room("Chambre 1", 120, 2, $hotel1);
$room2 = New Room("Chambre 2", 120, 2, $hotel1);
$room3 = New Room("Chambre 3", 120, 2, $hotel1);
$room4 = New Room("Chambre 4", 120, 2, $hotel1);

$room16 = New Room("Chambre 16", 300, 2, $hotel1);
$room17 = New Room("Chambre 17", 300, 2, $hotel1);
$room18 = New Room("Chambre 18", 300, 2, $hotel1);
$room19 = New Room("Chambre 19", 300, 2, $hotel1);













?>