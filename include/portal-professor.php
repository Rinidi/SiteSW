<?php
session_start();
include('control/verifica_login.php');
include('control/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Escola CEP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Estilo padrão -->
    <link rel="stylesheet" href="../css/professor.css">
</head>

<body>
    <div class="container painel">
        <div class="columns is-3 ">
            <div class="column is-one-quarter side">
                <div class="container">
                    <h1>Cursos</h1>
                    <h3>Informática</h3>
                    <h3>Eletrônica</h3>
                    <h3>Administração</h3>
                    <h3>Logística</h3>
                </div>
            </div>
            <div class="column">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM alunos";
                        $sql = mysqli_query($conexao, $query);
                        $i = 1;
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['cpf']; ?></td>
                                <td><?php echo $row['curso']; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $row['id']; ?>"><img class="icon" src="../img/pencil-icon.png" /></a>
                                    <a href="excluir.php?id=<?php echo $row['id']; ?>"><img class="icon" src="../img/cross-icon.png" /></a>
                                    </th>
                            </tr>
                        <?php $i++; } ?>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-4 col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <input class="input is-rounded" type="text" placeholder="Pesquisar usuário">
                    </div>
                    <div class="col-3 col-xl-2 col-lg-2 col-md-3 col-sm-3">
                        <a href="" id="btn-login" class="btn btn-secondary" role="button">Pesquisar</a>
                    </div>
                    <div class="col-4 col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <a href="cadastrar-aluno.php" id="btn-login" class="btn btn-secondary" role="button">Cadastrar Usuário</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <p class="foot">&copy; CepBrasópolis</p>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/portal-professor.js"></script>
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>