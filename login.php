<?php
//använder "include" för att inkludera min connect.php. Alltså min connection till databasen.
include 'connect.php';

//Sätter två varibler ($username, $password) till att vara username och password från min databas mha POST.
$username = $_POST['username'];
$password = $_POST['password'];

//Sätter en variabel ($sql] mha att använda SELECT kommando på mitt table "persons" för att få ut användarna. 
$sql = "SELECT * FROM persons WHERE username = '$username' AND password = '$password'";