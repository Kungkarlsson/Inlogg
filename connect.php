<?php
//skapar min connection ($conn) mha inbygda metoden "mysqli_connect", till min databas (mydatabase).
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
if (!$conn){
	//ifall vi inte hittar en connection använder jag "die" för att döda sidan och ge ett felmeddelande.
 	die("Connection failed: ". mysqli_connect_error());
 }
?>