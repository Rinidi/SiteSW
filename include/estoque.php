<?php
session_start();
include('control/verifica_login.php');
include('control/conexao.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Smart Wallet</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png" />
    <!-- Inclusão JQuery -->
    <script src="../jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../css/bulma.css" />
    <!-- Padrões CSS -->
    <link rel="stylesheet" href="../css/estilo.css">
    <script>
        $(document).ready(function() {
            $("#link-prod").click(function() {
                $("#sub-sec1").toggle("slow");
                e.preventDefaul();
            });
        })
    </script>
</head>

<body id="estoque">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <ul class="navbar-nav mr-auto">
            <div class="row justify-content-center">
                <a id="logo" class="navbar-brand" href="index.php">
                    <img src="../img/logo.png" class="img-fluid" width="40" height="40">
                    <p id="txt-logo"><strong>Smart</strong> Wallet</p>
                </a>
            </div>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
                <div class="row justify-content-center">
                </div>
            </div>
            <div class="row justify-content-center">
                <a id="btn-login" href="../index.php" class="btn btn-primary btn-block" role="button" aria-pressed="true">Voltar</a>
            </div>
        </div>
    </nav>

    <div id="div-estoque" class="container bg-white">
        <h2 class="h2-tittle margin-md-bot">Exemplo de Estoque</h2>
        <div class="row">
            <div class="col-2">
                <div class="col-12 sec">
                    <a id="link-prod">+ Estoque/Produtos</a>
                    <div id="sub-sec1" class="container-fluid">
                        <div class="row justify-content-center">
                            <ul class="list">
                                <div id="sub-item-1" class="col-12 sub-item">
                                    <a id="sub-link-alimentos">
                                        <li> Alimentos</li>
                                    </a>
                                </div>

                                <div id="sub-item-2" class="col-12 sub-item">
                                    <a id="sub-link-higiente">
                                        <li> Higiene</li>
                                    </a>
                                </div>
                                <div id="sub-item-3" class="col-12 sub-item">
                                    <a id="sub-link-higiente">
                                        <li> limpeza</li>
                                    </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 sec">
                    <a class="">Alteração de preço/Custo</a>
                </div>
                <div class="col-12 sec">
                    <a class="">Notas Fiscais</a>
                </div>
                <div class="col-12 sec">
                    <a class="">Cadastramento de produtos</a>
                </div>
                <div class="col-12 sec">
                    <a class="">Entradas e saídas</a>
                </div>
                <div class="col-12 sec-f">
                    <a class="">Inventário</a>
                </div>
            </div>
            <div class="col-10">
                <div class="table-wrapper-scroll-y my-custom-scrollbar border">
                    <table class="table table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Estoque</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $c = 1;
                            $query = mysqli_query($conexao, "SELECT * FROM produto ORDER BY idProd");
                            while ($row = mysqli_fetch_array($query)) {
                                $r = rand(5, 100);
                                ?>
                                <tr>
                                    <th style="vertical-align: middle;" scope="row">
                                        <?php echo $c; ?>
                                    </th>
                                    <th class="vertical-center" style="vertical-align: middle;">

                                        <img class="img-fluid" src="<?php echo $row['imagem']; ?>" width="70">

                                    </th>
                                    <td style="vertical-align: middle;">
                                        <?php echo $row['nome']; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        R$
                                        <?php echo $row['preco']; ?>
                                    </td>
                                    <td class="align-center" style="vertical-align: middle;">
                                        <?php echo $r; ?>
                                    </td>
                                    <th class="align-center" style="vertical-align: middle;">
                                        R$
                                        <?php echo ($r * $row['preco']); ?>
                                    </th>
                                    <th class="align-center" style="vertical-align: middle;">
                                        <a class="btn btn-secondary" style="color: #f9f9f9">Ver mais</a>
                                    </th>

                                </tr>
                                <div class="info-add">
                                </div>
                            <?php $c++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery/dist/jquery.js "></script>
    <script src="../popper.js/dist/popper.min.js "></script>
    <script src="../js/bootstrap.js "></script>
</body>

</html>