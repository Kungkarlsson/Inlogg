<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <meta charset="UTF-8">
</head>
<body>
<?php
//Skapar min startsida, min login-form. Post-method för att kunna skicka info till min databas. Har också addat "link" till stylesheet för att fixa designen.
?>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="U s e r n a m e"/><br>
      <input type="password" name="password" placeholder="P a s s w o r d"/><br>
      <button>login</button>
    </form>
</body>
</html>