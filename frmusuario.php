<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <?php include_once('cadastro_usuario.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Formulário de Usuário</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="id_usuario">ID Usuário</label>
                        <input type="number" id="id_usuario" name="id_usuario" class="form-control" value="<?= $id_usuario ?>">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="frmUsuario.php" name="Pesquisar">&#128269;</button>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="nome_usuario">Nome do Usuário</label>
                        <input type="text" id="nome_usuario" name="nome_usuario" class="form-control" value="<?= $nome_usuario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="login_usuario">Login</label>
                        <input type="text" id="login_usuario" name="login_usuario" class="form-control" value="<?= $login_usuario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="senha_usuario">Senha</label>
                        <input type="password" id="senha_usuario" name="senha_usuario" class="form-control">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="confirmar_senha">Confirmar Senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        <label for="obs_usuario">Observação</label>
                        <input type="text" id="obs_usuario" name="obs_usuario" class="form-control" value="<?= $obs_usuario ?>">
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="status_usuario">Status</label>
                        <select name="status_usuario" id="status_usuario" class="form-control">
                            <option value="ATIVO" <?=($status_usuario=='ATIVO')?'selected':'';?>>Ativo</option>
                            <option value="INATIVO" <?=($status_usuario=='INATIVO')?'selected':'';?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="cadastro_usuario.php">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="alterar_usuario.php">Alterar</button>
                    <a href="frmUsuario.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="excluir_usuario.php">Excluir</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
