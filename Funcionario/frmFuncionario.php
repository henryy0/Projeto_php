<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Funcionário</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('funcionario_alterar.php'); ?>
    <?php include_once('funcionario_cadastrar.php'); ?>
    <?php include_once('funcionario_excluir.php'); ?>
    <?php include_once('funcionario_pesquisar.php'); ?>
    <div class="container">
        <form action="funcionario_cadastrar" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Funcionário</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="ID_Funcionario">ID Funcionário</label>
                    </p>
                    <p>
                        <input type="number" id="ID_Funcionario" name="ID_Funcionario" class="form-control" value="<?= $ID_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="frmFuncionario.php" name="Pesquisar">&#128269;</button>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="data_Funcionario">Data de Registro</label>
                    </p>
                    <p>
                        <input type="date" id="data_Funcionario" name="Data_Admissao" class="form-control" value="<?= $data_Funcionario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="nome_Funcionario">Nome do Funcionário</label>
                    </p>
                    <p>
                        <input type="text" id="nome_Funcionario" name="Nome" class="form-control" value="<?= $nome_Funcionario ?>">
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="nasc_Funcionario">Data de Nascimento</label>
                    </p>
                    <p>
                        <input type="date" id="nasc_Funcionario" name="Nascimento" class="form-control" value="<?= $nasc_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cpf_Funcionario">CPF</label>
                    </p>
                    <p>
                        <input type="text" id="cpf_Funcionario" name="CPF" class="form-control" value="<?= $cpf_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="status_Funcionario">Status</label>
                    </p>
                    <p>
                        <select name="Status" id='status_Funcionario' class="form-control" readonly>
                            <option value=""> -- Status -- </option>
                            <option value="ATIVO" <?=($status_Funcionario=='ATIVO')?'Selected':'';?>>Ativo</option>
                            <option value="INATIVO" <?=($status_Funcionario=='INATIVO')?'Selected':'';?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="logradouro_Funcionario">Logradouro</label>
                    </p>
                    <p>
                        <input type="text" id="logradouro_Funcionario" name="Logradouro" class="form-control" value="<?= $logradouro_Funcionario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="numero_Funcionario">Número</label>
                    </p>
                    <p>
                        <input type="number" id="numero_Funcionario" name="Numero" class="form-control" value="<?= $numero_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="comp_funcionario">Complemento</label>
                    </p>
                    <p>
                        <input type="text" id="comp_funcionario" name="Complemento" class="form-control" value="<?= $comp_funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cep_Funcionario">CEP</label>
                    </p>
                    <p>
                        <input type="text" id="cep_Funcionario" name="CEP" class="form-control" value="<?= $cep_Funcionario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="bairro_Funcionario">Bairro</label>
                    </p>
                    <p>
                        <input type="text" id="bairro_Funcionario" name="Bairro" class="form-control" value="<?= $bairro_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="cidade_Funcionario">Cidade</label>
                    </p>
                    <p>
                        <input type="text" id="cidade_Funcionario" name="Cidade" class="form-control" value="<?= $cidade_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="uf_Funcionario">UF</label>
                    </p>
                    <p>
                        <select id="uf_Funcionario" name="UF" class="form-control" readonly>
                            <option value="AC" <?=($uf_Funcionario=='AC')?'selected':'';?>>Acre</option>
                            <option value="AL" <?=($uf_Funcionario=='AL')?'selected':'';?>>Alagoas</option>
                            <option value="AP" <?=($uf_Funcionario=='AP')?'selected':'';?>>Amapá</option>
                            <option value="AM" <?=($uf_Funcionario=='AM')?'selected':'';?>>Amazonas</option>
                            <option value="BA" <?=($uf_Funcionario=='BA')?'selected':'';?>>Bahia</option>
                            <option value="CE" <?=($uf_Funcionario=='CE')?'selected':'';?>>Ceará</option>
                            <option value="DF" <?=($uf_Funcionario=='DF')?'selected':'';?>>Distrito Federal</option>
                            <option value="ES" <?=($uf_Funcionario=='ES')?'selected':'';?>>Espírito Santo</option>
                            <option value="GO" <?=($uf_Funcionario=='GO')?'selected':'';?>>Goiás</option>
                            <option value="MA" <?=($uf_Funcionario=='MA')?'selected':'';?>>Maranhão</option>
                            <option value="MT" <?=($uf_Funcionario=='MT')?'selected':'';?>>Mato Grosso</option>
                            <option value="MS" <?=($uf_Funcionario=='MS')?'selected':'';?>>Mato Grosso do Sul</option>
                            <option value="MG" <?=($uf_Funcionario=='MG')?'selected':'';?>>Minas Gerais</option>
                            <option value="PA" <?=($uf_Funcionario=='PA')?'selected':'';?>>Pará</option>
                            <option value="PB" <?=($uf_Funcionario=='PB')?'selected':'';?>>Paraíba</option>
                            <option value="PR" <?=($uf_Funcionario=='PR')?'selected':'';?>>Paraná</option>
                            <option value="PE" <?=($uf_Funcionario=='PE')?'selected':'';?>>Pernambuco</option>
                            <option value="PI" <?=($uf_Funcionario=='PI')?'selected':'';?>>Piauí</option>
                            <option value="RJ" <?=($uf_Funcionario=='RJ')?'selected':'';?>>Rio de Janeiro</option>
                            <option value="RN" <?=($uf_Funcionario=='RN')?'selected':'';?>>Rio Grande do Norte</option>
                            <option value="RS" <?=($uf_Funcionario=='RS')?'selected':'';?>>Rio Grande do Sul</option>
                            <option value="RO" <?=($uf_Funcionario=='RO')?'selected':'';?>>Rondônia</option>
                            <option value="RR" <?=($uf_Funcionario=='RR')?'selected':'';?>>Roraima</option>
                            <option value="SC" <?=($uf_Funcionario=='SC')?'selected':'';?>>Santa Catarina</option>
                            <option value="SP" <?=($uf_Funcionario=='SP')?'selected':'';?>>São Paulo</option>
                            <option value="SE" <?=($uf_Funcionario=='SE')?'selected':'';?>>Sergipe</option>
                            <option value="TO" <?=($uf_Funcionario=='TO')?'selected':'';?>>Tocantins</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="telefone1_Funcionario">Telefone 1</label>
                    </p>
                    <p>
                        <input type="text" id="telefone1_Funcionario" name="Telefone1" class="form-control" value="<?= $telefone1_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone2_Funcionario">Telefone 2</label>
                    </p>
                    <p>
                        <input type="text" id="telefone2_Funcionario" name="Telefone2" class="form-control" value="<?= $telefone2_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone3_Funcionario">Telefone 3</label>
                    </p>
                    <p>
                        <input type="text" id="telefone3_Funcionario" name="Telefone3" class="form-control" value="<?= $telefone3_Funcionario ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="telefone4_Funcionario">Telefone 4</label>
                    </p>
                    <p>
                        <input type="text" id="telefone4_Funcionario" name="Telefone4" class="form-control" value="<?= $telefone4_Funcionario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        <label for="obs_Funcionario">Observação</label>
                    </p>
                    <p>
                        <textarea id="Observacao" name="Obs" rows="5" class="form-control"><?= $obs_Funcionario ?></textarea>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="funcionario_cadastrar.php">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="funcionario_alterar.php">Alterar</button>
                    <a href="frmFuncionario.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="funcionario_excluir.php">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>
</body>
</html>
