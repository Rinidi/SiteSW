<?php
include('conexao.php');
session_start();

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../login.php');
    exit();
}
$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM estabelecimento WHERE login= '{$user}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $user;
    header('Location: ../estoque.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../login.php');
    exit();
}
