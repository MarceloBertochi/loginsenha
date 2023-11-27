<?php 

// dados necessarios para conexão com sgbd
$servidor = "localhost";
$login = "root";
$senha = "root";
$banco = "sistema";

//conectando no banco de dados
$conexao = mysqli_connect($servidor,$login,$senha,$banco);

//dados do formulario
$user = $_POST['user'];
$sexo = $_POST['sexo'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];

print_r($_POST);



?>