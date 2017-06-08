<?php
//använder "include" för att inkludera min connect.php. Alltså min connection till databasen.
include 'connect.php';

//Sätter två varibler ($username, $password) till att vara username och password från min databas mha POST.
$username = $_POST['username'];
$password = $_POST['password'];

//Sätter en variabel ($sql) mha att använda SELECT kommando på mitt table "persons" för att få ut användarna. 
$sql = "SELECT * FROM persons WHERE username = '$username' AND password = '$password'";

//kör en query på min databas och sätter $result till värdet.
$result = mysqli_query($conn, $sql);

//kör mysqli_fetch_assoc för att få ett resultat som en array av en row i databasen och sätter det till $row. och jämnför med $result.
//om $row skiljer sig från $result är det fel lösenord och felmeddelande skickas. annars "your logged in"
if (!$row = mysqli_fetch_assoc($result)) {
 	echo "Your username or password is incorrect!";
 } else {
 	echo "Your logged in!";
 }
?>