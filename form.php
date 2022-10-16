<?php
include "banco.php";
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['adm'])){
  if ($_SESSION['adm']==1) {
    header("Location:adm.php");
  }
  if ($_SESSION['adm']==0) {
    header("Location:user.php");
  }
}
if (isset($_POST['cpf']) && $_POST['cpf'] != ''
 && isset($_POST['senha']) && $_POST['senha'] != '') {
	$usr= array();
	$usr['cpf'] =mysqli_real_escape_string($conexao ,$_POST['cpf']);
	$usr['senha'] =mysqli_real_escape_string($conexao, $_POST['senha']);
	$sql_bus="SELECT * FROM pessoas WHERE cpf = '".$usr['cpf'] ."'";
	$sql_rece=mysqli_query($conexao,$sql_bus) or die("ERROR");

	$existe = mysqli_num_rows($sql_rece);

	if($existe == 1){
		$usr_vel=mysqli_fetch_assoc($sql_rece);
		if(password_verify($usr['senha'],$usr_vel['senha'])){
		$_SESSION['nome']=$usr_vel['nome'];
		$sql_bus="SELECT * FROM adm WHERE cpf = '".$usr['cpf'] ."'";
		$sql_rece=mysqli_query($conexao,$sql_bus) or die("ERROR");
		$existe = mysqli_num_rows($sql_rece);
		if($existe == 1){
			$_SESSION['adm']=1;
			header("Location:adm.php");
			}else{
				$_SESSION['adm']=0;
				header("Location:user.php");
				}
		}else{
			$_SESSION['error']=1;
		}
		}
}

include "index.php";
