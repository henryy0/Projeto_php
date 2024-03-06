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
    <?php 
    include_once('movimentacao_cadastrar.php'); 
    include_once('movimentacao_alterar.php'); 
    include_once('movimentacao_excluir.php'); 
    include_once('movimentacao_pesquisar.php'); 
    include_once('combox.php'); 
    ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Movimentação de Estoque</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="id_mov">ID da Movimentação de Estoque</label>
                        <input type="number" id="id_mov" name="id_mov" class="form-control" value="<?= $id_mov ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="Sistema.php?tela=mov" name="Pesquisar" onclick="return validatePesquisa()">&#128269;</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="id_Produto_mov">ID do Produto</label>
                    </p>
                    <p>
                    <select id="id_Produto_mov" name="id_Produto_mov" class="form-control" readonly>
                        <?php carregarComboBox($conexao, 'produtos'); ?>
                    </select>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="id_Funcionario_mov">ID do Funcionário</label>
                    </p>
                    <p>
                    <select id="id_Funcionario_mov" name="id_Funcionario_mov" class="form-control" readonly>
                        <?php carregarComboBox($conexao, 'funcionarios'); ?>
                    </select>
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
                        <select name="tipo_mov" id="tipo_mov" class="form-control" readonly>
                            <option value="Entrada" <?= ($tipo_mov == 'Entrada') ? 'selected' : '' ?>>Entrada</option>
                            <option value="Saída" <?= ($tipo_mov == 'Saída') ? 'selected' : '' ?>>Saída</option>
                        </select>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="status_mov">Status</label>
                    </p>
                    <p>
                        <select name="status_mov" id="status_mov" class="form-control" readonly>
                            <option value="Ativo" <?= ($status_mov == 'Ativo') ? 'selected' : '' ?>>Ativo</option>
                            <option value="Inativo" <?= ($status_mov == 'Inativo') ? 'selected' : '' ?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="col-sm-12">
                <p>
                    <label for="obs_mov">Observação</label>
                </p>
                <p>
                    <textarea id="obs_mov" name="obs_mov" rows="6" class="form-control"><?= $obs_mov ?></textarea>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=mov" onsubmit="return validateForm()">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=mov">Alterar</button>
                    <a href="Sistema.php?tela=mov" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=mov">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>

    <script>
        function validateForm() {
            var quantidadeMov = document.getElementById('qtde_mov').value;
            var obsMov = document.getElementById('obs_mov').value;

            if (quantidadeMov === '' || quantidadeMov <= 0) {
                alert('Por favor, insira uma quantidade válida.');
                return false;
            }

            if (obsMov === '') {
                alert('Por favor, adicione uma observação.');
                return false;
            }

            return true;
        }

        function validatePesquisa() {
            var idMov = document.getElementById('id_mov').value.trim();

            if (idMov === '') {
                alert('Por favor, insira um ID de Movimentação de Estoque para pesquisar.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
