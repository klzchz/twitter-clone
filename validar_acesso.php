<?php
 session_start();
require_once('db.php');

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

//Instanciando Objeto 
$objDb = new db();
$link=$objDb->conecta_mysql();

// echo $usuario;
// echo "<br/>";
// echo $senha;

$sql = "SELECT id,usuario,email FROM  usuarios WHERE usuario =  '$usuario' AND senha = '$senha'";
 $resultado_id=mysqli_query($link,$sql);
 


 if($resultado_id){

	$dados_usuario=mysqli_fetch_array($resultado_id);

	// var_dump($dados_usuario);
	if (isset($dados_usuario['usuario'])) {
		
		$_SESSION['id_usuario'] =  $dados_usuario['id'];
		$_SESSION['usuario'] =  $dados_usuario['usuario'];
		$_SESSION['email'] =  $dados_usuario['email'];
		header('Location: home.php');
	}else{
		// echo "Usuario não existe";
		header('Location: index.php?erro=1');
	}
 }else{

 	echo "Erro na execução da consulta , favor entrar em contato com admin do Site ";
 }

 //update true/false
 //insert true/false
 //select false/true
 //delete 



