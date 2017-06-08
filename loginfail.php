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
//En sida ifall man skriver in fel uppgifter bara för snygghetens skull. Använder samma css som vid loginform.
?>
<div class="login-page">
  <div class="form">
    <form>
     <h3>Username or Password was incorrect, go back and try again!</h3>
    </form>
  </div>
</div>
</body>
</html>