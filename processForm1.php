<?php

session_start();

$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
//the 1 and 0//
$luggage = isset($_POST['luggage']) ? 1 : 0;

//here's what I learned from last class//
$_SESSION['passengerFN'] = $firstname;
$_SESSION['passengerSN'] = $secondname;
$_SESSION['luggage'] = $luggage;

//if it's 1 it'll do the luggage if it's not then 1 or 0//
if ($luggage == 1) {
    header("Location: luggage.html"); 
} else {
    header("Location: finalStep.php");
}
?>