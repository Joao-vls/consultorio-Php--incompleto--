<?php
include "block_no_login.php";
if ($_SESSION['adm']==0) {
	header("Location:form.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adm.css">
  <title>Login</title>
</head>

<body>
  <header><button class="menu_perfil"></button>
    <div class="perfil"></div>
  </header>
  <p><?php echo $_SESSION['nome']; ?></p>
</body>

</html>