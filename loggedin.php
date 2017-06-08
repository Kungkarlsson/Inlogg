<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <meta charset="UTF-8">
</head>
<body>
<?php
session_start();
//session_start() för att ha igång min session.
//Min hemliga sida som visas när man är inloggad. Använder samma css som innan.

//Om login inte är true, alltså om man ännu inte har testat logga in och blivit inloggad så hindrar det från att kunna skriva direkt sökväg till sidan i sökfältet och skickat dig till startisdan.
if(!$_SESSION['login']){
   header("location:startpage.php");
   die;
}
?>

<div class="login-page">
  <div class="form">
    <form method="POST" action="" login-form">
    <h3>This is a secret page, your logged in!</h3>
    <button name="button1">Logout</button>

	<?php
    //Logout-knappen stänger av nuvarande session så man inte är inloggad längre och linkar tillbaks till startsidan.
		if (isset($_POST['button1'])) 
		{ 
   			session_destroy();
   			header("Location:startpage.php"); 
		}  
	?>
    </form>
  </div>
</div>
</body>
</html>