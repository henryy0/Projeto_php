<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuários</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php include_once("_topo.php"); ?>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row">
            <div class="col-sm-2">
                <?php include_once("_menu.php"); ?>
            </div>
            <div class="col-sm-10">
                <?php
                if(isset($_GET['tela']))
                {
                    $tela = $_GET['tela'];

                    switch ($tela) {
                        case 'usuario':
                            include_once("Usuario/frmusuario.php");
                            break;
                        case 'funcionario':
                            include_once("Funcionario/frmFuncionario.php");
                            break;
                        case 'fornecedor':
                            include_once("Fornecedor/frmFornecedor.php");
                            break;
                        case 'produto':
                            include_once("Produto/frmProduto.php");
                            break;
                        case 'mov':
                            include_once("Movimentação/frmMov.php");
                            break;
                        case 'os':
                            include_once("OS/frmOS.php");
                            break;
                        case 'local':
                            include_once("LocalEstoque/frmLocal.php");
                            break;
                        case 'item':
                            include_once("itemEstoque/frmitem.php");
                            break;
                        default:
                            include_once("_home.php");
                            break;
                    }
                }
                else
                {
                    include_once("_home.php"); 
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php include_once("_rodape.php"); ?>
        </div>
    </div>
    
    <script src="js/bootstrap.js"></script>
</body>

</html>
