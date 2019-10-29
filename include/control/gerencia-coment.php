<?php
include('conexao.php');

if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['user_message'])) {
    header('Location: ../comentar.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$msg = mysqli_real_escape_string($conexao, $_POST['user_message']);
$data = date("Y/m/d");
$query = "INSERT INTO tb_comentarios(nome, email, data, comentario, ver) VALUES ('$nome', '$email', '$data', '$msg', 0)";

$result = mysqli_query($conexao, $query);

header('Location: ../../index.php');
