<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('cadastro_produto.php'); ?>
    <?php include_once('alterar_produto.php'); ?>
    <?php include_once('excluir_produto.php'); ?>
    <?php include_once('Pesquisar_produto.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Produto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="id_produto">ID Produto</label>
                        <input type="number" id="id_produto" name="id_produto" class="form-control" value="<?= $id_Produto ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="Sistema.php?tela=produto" name="Pesquisar">&#128269;</button>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="nome_produto">Nome do Produto</label>
                        <input type="text" id="nome_produto" name="Nome" class="form-control" value="<?= $nome_Produto ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="qtde_produto">Quantidade</label>
                        <input type="number" id="qtde_produto" name="Quantidade" class="form-control" value="<?= $qtde_Produto ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="vcusto_produto">Valor de Custo</label>
                        <input type="text" id="vcusto_produto" name="Vcusto" class="form-control" value="<?= $Vcusto_Produto ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="vvenda_produto">Valor de Venda</label>
                        <input type="text" id="vvenda_produto" name="Vvenda" class="form-control" value="<?= $Vvenda_Produto ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        <label for="Status">Status</label>
                        <select name="Status" id="Status" class="form-control" readonly>
                            <option value="ATIVO" <?=($status_Produto=='ATIVO')?'selected':'';?>>Ativo</option>
                            <option value="INATIVO" <?=($status_Produto=='INATIVO')?'selected':'';?>>Inativo</option>
                        </select>
                    </p>
                </div>
                <div class="col-sm-12">
    <p>
        <label for="obs_produto">Observação</label>
        <textarea id="obs_produto" name="Observacao" class="form-control" rows="5"><?= $obs_Produto ?></textarea>
    </p>
</div>

            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=produto">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=produto">Alterar</button>
                    <a href="Sistema.php?tela=produto" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=produto">Excluir</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.js"></script>
</body>
</html>
