<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Item de Estoque</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('itemestoque_alterar.php'); ?>
    <?php include_once('itemestoque_cadastrar.php'); ?>
    <?php include_once('itemestoque_excluir.php'); ?>
    <?php include_once('itemestoque_pesquisar.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Item de Estoque</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="id_produto_ItemEstoque">ID Produto</label>
                    </p>
                    <p>
                        <input type="number" id="id_produto_ItemEstoque" name="id_produto_ItemEstoque" class="form-control" value="<?= $id_produto_ItemEstoque ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="id_localEstoque_ItemEstoque">ID Local de Estoque</label>
                    </p>
                    <p>
                        <input type="number" id="id_localEstoque_ItemEstoque" name="id_localEstoque_ItemEstoque" class="form-control" value="<?= $id_localEstoque_ItemEstoque ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="obs_os">Observação</label>
                    </p>
                    <p>
                        <textarea id="obs_os" name="obs_os" rows="5" class="form-control"><?= $obs_os ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="status_os">Status</label>
                    </p>
                    <p>
                        <input type="text" id="status_os" name="status_os" class="form-control" value="<?= $status_os ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="itemestoque_cadastrar.php">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="itemestoque_alterar.php">Alterar</button>
                    <a href="frmItemEstoque.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="itemestoque_excluir.php">Excluir</button>
                </div>
            </div>
        </form>
    </div>
    
    <script src="../js/bootstrap.js"></script>
</body>
</html>
