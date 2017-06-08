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
//Skapar min startsida, min login-form. Post-method för att kunna skicka infon. Har också addat "link" till stylesheet för att fixa designen.
?>
<div class="login-page">
  <div class="form">
    <form action="login.php" method="post" login-form">
      <input type="text" name="username" placeholder="U s e r n a m e"/>
      <input type="password" name="password" placeholder="P a s s w o r d"/>
      <button name="button2">login</button>
    </form>
  </div>
</div>
</body>
</html>