<?php
include "block_no_login.php";
if ($_SESSION['adm']==1) {
	header("Location:form.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  455
  <a href="logout.php">sair</a>
</body>

</html>