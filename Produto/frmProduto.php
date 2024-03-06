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
        <form action="" method="post" class="form-control" enctype="multipart/form-data">
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
                    <button class="btn btn-primary" type="submit" formaction="Sistema.php?tela=produto" name="Pesquisar" onclick="return validatePesquisa()">&#128269;</button>
                </div>
                <div class="col-sm-3">
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
                <div class="col-sm-3">
                    <p>
                        <label for="txtImg">Foto Produto</label>
                        <input type="file" name="txtImg" id="txtImg" class="form-control" value="<?=$img_Produto?>">
                    </p> 
                </div>
                <div class="col-sm-3">
                    <img src="produtos/<?=$id_Produto?>/<?=$img_Produto?>" alt="" class="w-100">
                </div>
            </div>
            <div class="col-sm-12">
                <p>
                    <label for="obs_produto">Observação</label>
                    <textarea id="obs_produto" name="Observacao" class="form-control" rows="5"><?= $obs_Produto ?></textarea>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=produto" onclick="return validateForm()">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=produto">Alterar</button>
                    <a href="Sistema.php?tela=produto" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=produto">Excluir</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.js"></script>

    <script>
        function validatePesquisa() {
            var idProduto = document.getElementById('id_produto').value.trim();

            if (idProduto === '') {
                alert('Por favor, insira um ID de produto para pesquisar.');
                return false;
            }

            return true;
        }

        function validateForm() {
            var nomeProduto = document.getElementById('nome_produto').value;
            var quantidadeProduto = document.getElementById('qtde_produto').value;
            var valorCusto = document.getElementById('vcusto_produto').value;
            var valorVenda = document.getElementById('vvenda_produto').value;
            var txtImg = document.getElementById('txtImg').value;

            if (nomeProduto === '') {
                alert('Por favor, adicione um nome para o produto.');
                return false;
            }

            if (quantidadeProduto === '' || quantidadeProduto <= 0) {
                alert('Por favor, adicione uma quantidade válida.');
                return false;
            }

            if (valorCusto === '' || isNaN(parseFloat(valorCusto))) {
                alert('Por favor, adicione um valor de custo válido.');
                return false;
            }

            if (valorVenda === '' || isNaN(parseFloat(valorVenda))) {
                alert('Por favor, adicione um valor de venda válido.');
                return false;
            }

            if (txtImg === '') {
                alert('Por favor, selecione uma imagem para o produto.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
