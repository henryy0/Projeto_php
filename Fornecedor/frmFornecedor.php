<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Fornecedor</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('fornecedor_alterar.php'); ?>
    <?php include_once('fornecedor_cadastrar.php'); ?>
    <?php include_once('fornecedor_excluir.php'); ?>
    <?php include_once('fornecedor_pesquisar.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Fornecedor</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="ID_Fornecedor">ID Fornecedor</label>
                    </p>
                    <p>
                        <input type="number" id="ID_Fornecedor" name="ID_Fornecedor" class="form-control" value="<?= $ID_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="frmFornecedor.php" name="Pesquisar">&#128269;</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="nome_Fornecedor">Nome do Fornecedor</label>
                    </p>
                    <p>
                        <input type="text" id="nome_Fornecedor" name="Nome" class="form-control" value="<?= $nome_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="nasc_Fornecedor">Data de Nascimento</label>
                    </p>
                    <p>
                        <input type="date" id="nasc_Fornecedor" name="Nascimento" class="form-control" value="<?= $nasc_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cnpj_Fornecedor">CNPJ</label>
                    </p>
                    <p>
                        <input type="text" id="cnpj_Fornecedor" name="CNPJ" class="form-control" value="<?= $cnpj_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="data_Fornecedor">Data de Registro</label>
                    </p>
                    <p>
                        <input type="datetime-local" id="data_Fornecedor" name="Data_Registro" class="form-control" value="<?= $data_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        <label for="logradouro_Fornecedor">Logradouro</label>
                    </p>
                    <p>
                        <input type="text" id="logradouro_Fornecedor" name="Logradouro" class="form-control" value="<?= $logradouro_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-2">
                    <p>
                        <label for="numero_Fornecedor">Número</label>
                    </p>
                    <p>
                        <input type="number" id="numero_Fornecedor" name="Numero" class="form-control" value="<?= $numero_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cep_Fornecedor">CEP</label>
                    </p>
                    <p>
                        <input type="text" id="cep_Fornecedor" name="CEP" class="form-control" value="<?= $cep_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="bairro_Fornecedor">Bairro</label>
                    </p>
                    <p>
                        <input type="text" id="bairro_Fornecedor" name="Bairro" class="form-control" value="<?= $bairro_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cidade_Fornecedor">Cidade</label>
                    </p>
                    <p>
                        <input type="text" id="cidade_Fornecedor" name="Cidade" class="form-control" value="<?= $cidade_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="uf_Fornecedor">UF</label>
                    </p>
                    <p>
                        <input type="text" id="uf_Fornecedor" name="UF" class="form-control" value="<?= $uf_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="telefone1_Fornecedor">Telefone 1</label>
                    </p>
                    <p>
                        <input type="text" id="telefone1_Fornecedor" name="Telefone1" class="form-control" value="<?= $telefone1_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone2_Fornecedor">Telefone 2</label>
                    </p>
                    <p>
                        <input type="text" id="telefone2_Fornecedor" name="Telefone2" class="form-control" value="<?= $telefone2_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone3_Fornecedor">Telefone 3</label>
                    </p>
                    <p>
                        <input type="text" id="telefone3_Fornecedor" name="Telefone3" class="form-control" value="<?= $telefone3_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone4_Fornecedor">Telefone 4</label>
                    </p>
                    <p>
                        <input type="text" id="telefone4_Fornecedor" name="Telefone4" class="form-control" value="<?= $telefone4_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        <label for="contato_Fornecedor">Contato</label>
                    </p>
                    <p>
                        <input type="text" id="contato_Fornecedor" name="Contato" class="form-control" value="<?= $contato_Fornecedor ?>">
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="obs_Fornecedor">Observação</label>
                    </p>
                    <p>
                        <input type="text" id="obs_Fornecedor" name="Observacao" class="form-control" value="<?= $obs_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="status_Fornecedor">Status</label>
                    </p>
                    <p>
                        <input type="text" id="status_Fornecedor" name="Status" class="form-control" value="<?= $status_Fornecedor ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="fornecedor_cadastrar.php">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="fornecedor_alterar.php">Alterar</button>
                    <a href="frmFornecedor.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="fornecedor_excluir.php">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>
