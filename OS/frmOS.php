<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de OS</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('os_alterar.php'); ?>
    <?php include_once('os_cadastrar.php'); ?>
    <?php include_once('os_excluir.php'); ?>
    <?php include_once('os_pesquisar.php'); ?>
    <?php include_once('combox.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Ordem de Serviço (OS)</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="id_produto_os">ID do Produto</label>
                    </p>
                    <p>
                    <select id="id_produto_os" name="id_produto_os" class="form-control" readonly>
                        <?php carregarComboBox($conexao, 'produtos'); ?>
                    </select>
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="data_os">Data da OS</label>
                    </p>
                    <p>
                        <input type="datetime-local" id="data_os" name="data_os" class="form-control" value="<?= $data_os ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="qtde_os">Quantidade</label>
                    </p>
                    <p>
                        <input type="number" id="qtde_os" name="qtde_os" class="form-control" value="<?= $qtde_os ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="status_os">Status</label>
                    </p>
                    <p>
                    <select id="status_os" name="status_os" class="form-control" readonly>
                        <option value="Aberta" <?= ($status_os == 'Aberta') ? 'selected' : '' ?>>Aberta</option>
                        <option value="Em andamento" <?= ($status_os == 'Em andamento') ? 'selected' : '' ?>>Em andamento</option>
                        <option value="Concluída" <?= ($status_os == 'Concluída') ? 'selected' : '' ?>>Concluída</option>
                    </select>
                    </p>
                </div>
                <div class="col-sm-12">
                    <p>
                        <label for="obs_os">Observação</label>
                    </p>
                    <p>
                        <textarea id="obs_os" name="obs_os" rows="3" class="form-control"><?= $obs_os ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=os" onsubmit="return validateForm()">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=os">Alterar</button>
                    <a href="Sistema.php?tela=os" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=os">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>

    <script>
        function validateForm() {
            var dataOs = document.getElementById('data_os').value;
            var quantidadeOs = document.getElementById('qtde_os').value;
            var obsOs = document.getElementById('obs_os').value;

            if (dataOs === '') {
                alert('Por favor, selecione a data da OS.');
                return false;
            }

            if (quantidadeOs === '' || quantidadeOs <= 0) {
                alert('Por favor, insira uma quantidade válida.');
                return false;
            }

            if (obsOs === '') {
                alert('Por favor, adicione uma observação.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
