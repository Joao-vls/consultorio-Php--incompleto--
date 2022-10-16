<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <script type="text/javascript" src="js.js"></script>
    <title>Login</title>
</head>

<body>

    <div class="tela_login">
        <h1>Consultorio</h1>
        <form method="post">
            <fieldset>
                <legend>Entrar</legend>
                <label>
                    <input type="text" name="cpf" placeholder="cpf" />
                    <p></p>
                </label>
                <label>
                    <input type="password" name="senha" placeholder="Senha" />
                    <?php
                    if (isset($_SESSION['error'])) {
                          echo "<p>Senha ou usuario invalido</p>";
                        }
                        ?>
                </label>
                <input type="submit" value="Entrar">
            </fieldset>
        </form>
    </div>
</body>

</html>
