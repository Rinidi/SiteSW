<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Escola CEP</title>
    <link rel='stylesheet' type='text/css' href='../css/estilo.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <!-- Css padrao -->
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h3>Escrever Comentário</h3>
                    <div class="box">
                        <form action="control/gerencia-coment.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <label class="label-form" for="nome">Nome:</label>
                                    <input id="nome" name="nome" name="text" class="input is-large" placeholder="Seu nome" autofocus="" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label class="label-form" for="email">Email:</label>
                                    <input id="email" name="email" class="input is-large" type="email" placeholder="usuario@" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label class="label-form" for="msg">Mensagem:</label>
                                    <textarea id="msg" name="user_message" class="textarea" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-dark is-large is-fullwidth">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../jquery/dist/jquery.js"></script>
    <script src="../popper.js/dist/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>