<?php


//Startar en session så uppgifterna ska sparas tills sidan stängs ner.
session_start();

//använder "include" för att inkludera min connect.php. Alltså min connection till databasen.
include 'connect.php';


//Sätter två varibler ($username, $password) till att vara vad använderna skriver in i loginformen mha POST. Och använder FILTER_SANITIZE för att hindra sql script attacker. Tar bort möjligheten att skriva konstiga tecken i sökfältet.
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

//Sätter en variabel ($sql) mha att använda SELECT kommando på mitt table "persons" för att få ut användarna. 
$sql = "SELECT * FROM persons WHERE username = '$username' AND password = '$password'";

//kör en query på min databas och sätter $result till värdet.
$result = mysqli_query($conn, $sql);

//kör mysqli_fetch_assoc för att få ett resultat som en array av en row i databasen och sätter det till $row. och jämnför med $result.
//om $row skiljer sig från $result är det fel lösenord och felmeddelande skickas. annars loggas du in.
if (!$row = mysqli_fetch_assoc($result)) {
 	header("Location:loginfail.php");
 } else {
 	//sparar rätt username och pw för inlogg i $_SESSION[username/password]
 	//gör en variabel login i min session och sätter den till true.
 	$_SESSION['login'] = true;
 	$_SESSION['username'] = $row['username'];
 	$_SESSION['password'] = $row['password'];
 	header("Location:loggedin.php");
 }

?>