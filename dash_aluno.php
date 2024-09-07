<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria | Etec Itanhaém</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">Rodolfo Araujo</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Novo Pedido</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Internet</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Armário</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Meus Pedidos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Histórico</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">perfil&nbsp;</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#">Sair</a></span></div>
        </div>
    </nav>
    <div></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><i class="fa fa-user-circle-o" style="width:15;height:15;font-size:151px;"></i>
                    <h6 style="font-size:14;font-family:Amaranth, sans-serif;height:auto;margin:0;padding:0;width:266px;">RM: 076435&nbsp;
                        <br>
                        Nome:<?php echo $_SESSION['quem'];?>&nbsp;<br>Curso: Desenvolvimento de Sistemas Turma: &nbsp;<br>3DES3<br></h6>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>