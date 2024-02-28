<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Local de Estoque</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('local_estoque_alterar.php'); ?>
    <?php include_once('local_estoque_cadastrar.php'); ?>
    <?php include_once('local_estoque_excluir.php'); ?>
    <?php include_once('local_estoque_pesquisar.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Local de Estoque</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="ID_LocalEstoque">ID Local de Estoque</label>
                    </p>
                    <p>
                        <input type="number" id="ID_LocalEstoque" name="ID_LocalEstoque" class="form-control" value="<?= $ID_LocalEstoque ?>">
                    </p>      
                </div>
                <div class="col-sm-6">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="frmLocalEstoque.php" name="Pesquisar">&#128269;</button>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="status_LocalEstoque">Status</label>
                    </p>
                    <p>
                        <select name="Status" id="status_LocalEstoque" class="form-control" readonly>
                            <option value="Ativo" <?= ($status_LocalEstoque == 'Ativo') ? 'selected' : '' ?>>Ativo</option>
                            <option value="Inativo" <?= ($status_LocalEstoque == 'Inativo') ? 'selected' : '' ?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="nome_LocalEstoque">Nome do Local de Estoque</label>
                    </p>
                    <p>
                        <input type="text" id="nome_LocalEstoque" name="Nome" class="form-control" value="<?= $nome_LocalEstoque ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="obs_LocalEstoque">Observação</label>
                    </p>
                    <p>
                        <textarea id="obs_LocalEstoque" name="Observacao" rows="5" class="form-control"><?= $obs_LocalEstoque ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=local">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=local">Alterar</button>
                    <a href="Sistema.php?tela=local" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=local">Excluir</button>
                </div>
            </div>
        </form>
    </div>
    
    <script src="../js/bootstrap.js"></script>
</body>
</html>
