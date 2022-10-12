<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'adm_consult';
$bdSenha = 'ZXOMNLqB5RO0gxE6';
$bdBanco = 'consultorio';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

