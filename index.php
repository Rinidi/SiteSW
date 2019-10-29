<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Escola CEP</title>
    <link rel='stylesheet' type='text/css' href='css/estilo.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="stylesheet" href="css/estilo.css">
    <?php include('include/control/conexao.php'); ?>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <ul class="navbar-nav mr-auto">
            <div class="row justify-content-center">
                <a id="logo" class="navbar-brand" href="index.php">
                    <img src="img/logo.png" class="img-fluid" width="40" height="40">
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
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="include/projeto.html">Projeto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="include/sobre.html">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="include/contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <a id="btn-login" href="include/login.php" class="btn btn-primary btn-block" role="button" aria-pressed="true">Login</a>
            </div>
        </div>
    </nav>
    <div id="div-primary" class="container-fluid">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-7">
                    <h1 id="txt-lg">Conheça o projeto SmartWallet</h1>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-7">
                    <h3 id="txt-md">Projeto de mercado do futuro</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="div-md" class="container">
        <div id="bot-margin-md" class="row justify-content-center">
            <h1 class="h1-txt">Projeto Smart Wallet</h1>
        </div>
        <div class="row justify-content-between">
            <div id="align-center" class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex justify-content-center">
                    <img src="img/arduino-logo.png" class="img-fluid" width="100px" />
                </div>
                <div class="margin-md-top">
                    <h3 class="h3-txt">Desenvolvido em Arduino</h3>
                    <p>Utilização da linguagem Arduino para programação do Microcontrolador</p>
                </div>
            </div>
            <div id="align-center" class="col-12 col-xl-3 col-lg-4 col-md-4 col-sm-12">
                <div class="d-flex justify-content-center">
                    <img src="img/android-logo.png" class="img-fluid" width="100px" />
                </div>
                <div class="margin-md-top">
                    <h3 class="h3-txt">Desenvolvido em Android</h3>
                    <p>Desenvolvimento do aplicativo android para interface com o cliente</p>
                </div>
            </div>
            <div id="align-center" class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 justify-content-center">
                <div class="d-flex justify-content-center">
                    <img src="img/rfid-logo.png" class="img-fluid" width="100px" />
                </div>
                <div class="margin-md-top">
                    <h3 class="h3-txt">Tecnologia RFID</h3>
                    <p>Tecnologia de identificação por ondas de radiofrequêcia</p>
                </div>
            </div>
        </div>
    </div>
    <div id="div-secondary" class="container-fluid">
        <div id="div-md" class="container">
            <div id="bot-margin-md" class="row justify-content-center">
                <h1 id="margin-sm-top" class="h1-txt shadow-md">A revolução das compras</h1>
            </div>
            <div class="row justify-content-center">
                <div id="align-center" class="col-12 col-xl-10 col-lg-10 col-md-11 col-sm-12">
                    <p class="p-txt shadow-sm">Com a implementação do sistema Smart Wallet o modelo atual de compras será descartado, os benefícios oferecidos pelo projeto são inúmeros, tais como a maior disposição de informações ao consumidor e a aceleração no pagamento da compra.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div id="margin-md-top" class="col-6 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <img src="img/fundos/fundo2R.jpg" class="img-fluid rounded-md box-shadow" width="450" />
                </div>
                <div id="margin-md-top" class="col-6 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <img src="img/fundos/fundo3R.jpg" class="img-fluid rounded-md box-shadow" width="450" />
                </div>
                <div id="margin-md-top" class="col-6 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <img src="img/fundos/fundo4R.jpg" class="img-fluid rounded-md box-shadow" width="450" />
                </div>
                <div id="margin-md-top" class="col-6 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <img src="img/fundos/fundo5R.jpg" class="img-fluid rounded-md box-shadow" width="450" />
                </div>
            </div>
        </div>
    </div>

    <div id="div-tertiary" class="container-fluid">
        <?php $result = mysqli_query($conexao, "SELECT * from tb_comentarios WHERE ver=1"); ?>
        <div class="container">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <div id="box-comentario" class="row justify-content-start">
                    <div id="box-icon-logo" >
                        <img id="icon" src="img/renan-perfil-image.jpg" class="img-fluid" width="100" />
                    </div>
                    <div id="comentario">
                        <div class="row">
                            <p class="txt-nome"><?php echo $row['nome']; ?></p>
                            <p class="txt-data"><?php echo $row['data']; ?></p>
                        </div>
                        <p class="txt-comentario"><?php echo $row['comentario']; ?></p>
                    </div>
                </div>
            <?php } ?>
            <a id="btn-enviar" href="include/comentar.php" class="btn btn-primary btn-lg " role="button">Enviar Comentário</a>
        </div>
    </div>

    <footer id="div-final ">
        <div class="row justify-content-center ">
            <p>&copy; CEP-Brasópolis 2019</p>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/dist/jquery.js "></script>
    <script src="popper.js/dist/popper.min.js "></script>
    <script src="js/bootstrap.js "></script>
</body>

</html>