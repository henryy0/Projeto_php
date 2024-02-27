<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Movimentação de Estoque</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('movimentacao_cadastrar.php'); ?>
    <?php include_once('movimentacao_alterar.php'); ?>
    <?php include_once('movimentacao_excluir.php'); ?>
    <?php include_once('movimentacao_pesquisar.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Movimentação de Estoque</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="id_Produto_mov">ID do Produto</label>
                    </p>
                    <p>
                        <input type="number" id="id_Produto_mov" name="id_Produto_mov" class="form-control" value="<?= $id_Produto_mov ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="id_Funcionario_mov">ID do Funcionário</label>
                    </p>
                    <p>
                        <input type="number" id="id_Funcionario_mov" name="id_Funcionario_mov" class="form-control" value="<?= $id_Funcionario_mov ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="qtde_mov">Quantidade</label>
                    </p>
                    <p>
                        <input type="number" id="qtde_mov" name="qtde_mov" class="form-control" value="<?= $qtde_mov ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="tipo_mov">Tipo de Movimentação</label>
                    </p>
                    <p>
                        <select name="tipo_mov" id="tipo_mov" class="form-control">
                            <option value="Entrada" <?= ($tipo_mov == 'Entrada') ? 'selected' : '' ?>>Entrada</option>
                            <option value="Saída" <?= ($tipo_mov == 'Saída') ? 'selected' : '' ?>>Saída</option>
                        </select>
                    </p>
                </div>
                <div class="col-sm-8">
                    <p>
                        <label for="obs_mov">Observação</label>
                    </p>
                    <p>
                        <textarea id="obs_mov" name="obs_mov" rows="3" class="form-control"><?= $obs_mov ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="status_mov">Status</label>
                    </p>
                    <p>
                        <select name="status_mov" id="status_mov" class="form-control">
                            <option value="Ativo" <?= ($status_mov == 'Ativo') ? 'selected' : '' ?>>Ativo</option>
                            <option value="Inativo" <?= ($status_mov == 'Inativo') ? 'selected' : '' ?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="movimentacao_cadastrar.php">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="movimentacao_alterar.php">Alterar</button>
                    <a href="frmMovimentacao.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="movimentacao_excluir.php">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>
