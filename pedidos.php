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
        <div class="container"><a class="navbar-brand" href="#">Administrador</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">armários</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">internet</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Opções</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul><span class="navbar-text actions"> <a href="#" class="login">meu perfil</a><a class="btn btn-light action-button" role="button" href="#">Sair</a></span></div>
        </div>
    </nav>
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-opencart"></i>&nbsp;Em aberto</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"><i class="fa fa-check-square-o"></i>&nbsp;Confirmados</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3"><i class="fa fa-thumbs-o-up"></i>&nbsp;Finalizados</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <p>Content for tab 1.<br></p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <p>Content for tab 2.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <p>Content for tab 3.</p>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                    <td><i class="fa fa-eye" data-bs-hover-animate="rubberBand"></i>&nbsp;<i class="fa fa-check-square-o"></i>&nbsp;<i class="fa fa-window-close"></i>&nbsp;</td>
                </tr>
                <tr>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                    <td><i class="fa fa-eye"></i>&nbsp;<i class="fa fa-check-square-o"></i>&nbsp;<i class="fa fa-window-close"></i>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade d-block" role="dialog" tabindex="-1" style="background-color:rgba(0,0,0,0.44);">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Visualizar Pedido</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>ID: 00002312 DATA: 14/03/2024 &nbsp; TURMA: 3DES3 NOME: RODOLFO ARAUJO VALOR: R$ 258,00 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DESCRIÇÃO:
                        07 - Camisa Masc - Desenv. Sistemas - TAM GG - R$ 45,00<br></p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancelar Pedido</button><button class="btn btn-primary" type="button">Confirmar Pedido</button></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>