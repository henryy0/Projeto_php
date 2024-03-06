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
                    <button class="btn btn-primary" type="submit" formaction="Sistema.php?tela=fornecedor" name="Pesquisar" onclick="return validatePesquisar()">&#128269;</button>
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
                        <select id="uf_Fornecedor" name="UF" class="form-control" readonly>
                            <option value="AC" <?=($uf_Fornecedor=='AC')?'selected':'';?>>Acre</option>
                            <option value="AL" <?=($uf_Fornecedor=='AL')?'selected':'';?>>Alagoas</option>
                            <option value="AP" <?=($uf_Fornecedor=='AP')?'selected':'';?>>Amapá</option>
                            <option value="AM" <?=($uf_Fornecedor=='AM')?'selected':'';?>>Amazonas</option>
                            <option value="BA" <?=($uf_Fornecedor=='BA')?'selected':'';?>>Bahia</option>
                            <option value="CE" <?=($uf_Fornecedor=='CE')?'selected':'';?>>Ceará</option>
                            <option value="DF" <?=($uf_Fornecedor=='DF')?'selected':'';?>>Distrito Federal</option>
                            <option value="ES" <?=($uf_Fornecedor=='ES')?'selected':'';?>>Espírito Santo</option>
                            <option value="GO" <?=($uf_Fornecedor=='GO')?'selected':'';?>>Goiás</option>
                            <option value="MA" <?=($uf_Fornecedor=='MA')?'selected':'';?>>Maranhão</option>
                            <option value="MT" <?=($uf_Fornecedor=='MT')?'selected':'';?>>Mato Grosso</option>
                            <option value="MS" <?=($uf_Fornecedor=='MS')?'selected':'';?>>Mato Grosso do Sul</option>
                            <option value="MG" <?=($uf_Fornecedor=='MG')?'selected':'';?>>Minas Gerais</option>
                            <option value="PA" <?=($uf_Fornecedor=='PA')?'selected':'';?>>Pará</option>
                            <option value="PB" <?=($uf_Fornecedor=='PB')?'selected':'';?>>Paraíba</option>
                            <option value="PR" <?=($uf_Fornecedor=='PR')?'selected':'';?>>Paraná</option>
                            <option value="PE" <?=($uf_Fornecedor=='PE')?'selected':'';?>>Pernambuco</option>
                            <option value="PI" <?=($uf_Fornecedor=='PI')?'selected':'';?>>Piauí</option>
                            <option value="RJ" <?=($uf_Fornecedor=='RJ')?'selected':'';?>>Rio de Janeiro</option>
                            <option value="RN" <?=($uf_Fornecedor=='RN')?'selected':'';?>>Rio Grande do Norte</option>
                            <option value="RS" <?=($uf_Fornecedor=='RS')?'selected':'';?>>Rio Grande do Sul</option>
                            <option value="RO" <?=($uf_Fornecedor=='RO')?'selected':'';?>>Rondônia</option>
                            <option value="RR" <?=($uf_Fornecedor=='RR')?'selected':'';?>>Roraima</option>
                            <option value="SC" <?=($uf_Fornecedor=='SC')?'selected':'';?>>Santa Catarina</option>
                            <option value="SP" <?=($uf_Fornecedor=='SP')?'selected':'';?>>São Paulo</option>
                            <option value="SE" <?=($uf_Fornecedor=='SE')?'selected':'';?>>Sergipe</option>
                            <option value="TO" <?=($uf_Fornecedor=='TO')?'selected':'';?>>Tocantins</option>
                        </select>
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
                        <label for="status_Fornecedor">Status</label>
                    </p>
                    <p>
                        <select id="status_Fornecedor" name="Status" class="form-control" readonly>
                            <option value="ATIVO" <?=($status_Fornecedor=='ATIVO')?'selected':'';?>>ATIVO</option>
                            <option value="INATIVO" <?=($status_Fornecedor=='INATIVO')?'selected':'';?>>INATIVO</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="obs_Fornecedor">Observação</label>
                    </p>
                    <p>
                        <textarea id="obs_Fornecedor" name="Observacao" rows="5" class="form-control"><?= $obs_Fornecedor ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=fornecedor" onclick="return validateForm()">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=fornecedor">Alterar</button>
                    <a href="Sistema.php?tela=fornecedor" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=fornecedor">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>

    <script>
    function validateForm() {
        var nomeFornecedor = document.getElementById('nome_Fornecedor').value;
        var dataNascimento = document.getElementById('nasc_Fornecedor').value;
        var cnpjFornecedor = document.getElementById('cnpj_Fornecedor').value;
        var dataRegistro = document.getElementById('data_Fornecedor').value;
        var telefone1 = document.getElementById('telefone1_Fornecedor').value;

        if (nomeFornecedor === '') {
            alert('Por favor, insira o Nome do Fornecedor.');
            return false;
        }

        if (dataNascimento === '') {
            alert('Por favor, insira a Data de Nascimento.');
            return false;
        }

        if (cnpjFornecedor === '') {
            alert('Por favor, insira o CNPJ.');
            return false;
        }

        if (dataRegistro === '') {
            alert('Por favor, insira a Data de Registro.');
            return false;
        }

        if (telefone1 === '') {
            alert('Por favor, insira pelo menos o Telefone 1.');
            return false;
        }

        return true;
    }

    function validatePesquisar() {
        var idFornecedor = document.getElementById('ID_Fornecedor').value;

        if (idFornecedor === '') {
            alert('Por favor, insira o ID do Fornecedor para pesquisar.');
            return false;
        }

        return true;
    }
</script>

</body>
</html>
