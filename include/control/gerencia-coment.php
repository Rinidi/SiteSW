<?php
include('conexao.php');

if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['user_message'])) {
    header('Location: ../comentar.php');
    exit();
}
$iconid = rand(1, 37);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$msg = mysqli_real_escape_string($conexao, $_POST['user_message']);
$data = date("Y/m/d");
$query = "INSERT INTO comentarios(nome, email, data, comentario, ver, icon)"; 
$query .= "VALUES ('$nome', '$email', '$data', '$msg', 0, '$iconid')";

$result = mysqli_query($conexao, $query);

header('Location: ../../index.php');
