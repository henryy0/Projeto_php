<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('cadastro_usuario.php'); ?> 
    <?php include_once('alterar_usuario.php'); ?>
    <?php include_once('excluir_usuario.php'); ?>
    <?php include_once('Pesquisar_usuario.php'); ?>
    <div class="container">
        <form action="" method="post" class="form-control" enctype="multipart/form-data">
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
                <div class="col-sm-6">
                    <p>&nbsp;</p>
                    <button class="btn btn-primary" type="submit" formaction="Sistema.php?tela=usuario" name="Pesquisar" onclick="return validatePesquisa()">&#128269;</button>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="nome_usuario">Nome do Usuário</label>
                        <input type="text" id="nome_usuario" name="Nome" class="form-control" value="<?= $nome_Usuario ?>">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <p>
                        <label for="login_usuario">Login</label>
                        <input type="text" id="login_usuario" name="Login" class="form-control" value="<?= $login_Usuario ?>">
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <label for="senha_usuario">Senha</label>
                        <input type="password" id="senha_usuario" name="Senha" class="form-control">
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
            <div class="col-sm-3">
                    <p>
                        <label for="txtImg">Foto Perfil</label>
                        <input type="file" name="txtImg" id="txtImg" class="form-control" value="<?=$img_Usuario?>">
                    </p> 
                </div>
                <div class="col-sm-3">
                    <img src="imagens/<?=$id_usuario?>/<?=$img_Usuario?>" alt="" class="w-100">
                </div>
                <div class="col-sm-6">
                    <p>
                        <label for="status_usuario">Status</label>
                        <select name="Status" id="Status" class="form-control" readonly>
                            <option value="ATIVO" <?=($status_Usuario=='ATIVO')?'selected':'';?>>Ativo</option>
                            <option value="INATIVO" <?=($status_Usuario=='INATIVO')?'selected':'';?>>Inativo</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="col-sm-12">
                <p>
                    <label for="obs_usuario">Observação</label>
                    <textarea id="obs_usuario" name="Observacao" rows="5" class="form-control"><?= $obs_Usuario ?></textarea>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="Cadastrar" class="btn btn-primary" formaction="Sistema.php?tela=usuario" onclick="return validateForm()">Cadastrar</button>
                    <button name="Alterar" class="btn btn-success" formaction="Sistema.php?tela=usuario">Alterar</button>
                    <a href="frmUsuario.php" class="btn btn-secondary">Limpar</a>
                    <button name="Excluir" class="btn btn-danger" formaction="Sistema.php?tela=usuario">Excluir</button>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/bootstrap.js"></script>

    <script>
        function validateForm() {
            var nomeUsuario = document.getElementById('nome_usuario').value;
            var loginUsuario = document.getElementById('login_usuario').value;
            var senhaUsuario = document.getElementById('senha_usuario').value;
            var confirmSenha = document.getElementById('confirmar_senha').value;
            var txtImg = document.getElementById('txtImg').value;
            var idUsuario = document.getElementById('id_usuario').value.trim();

            if (nomeUsuario === '') {
                alert('Por favor, adicione um nome.');
                return false;
            }

            if (loginUsuario === '') {
                alert('Por favor, adicione um login.');
                return false;
            }

            if (senhaUsuario === '') {
                alert('Por favor, adicione uma senha.');
                return false;
            }

            if (senhaUsuario !== confirmSenha) {
                alert('As senhas não coincidem. Por favor, verifique.');
                return false;
            }

            if (txtImg === '') {
                alert('Por favor, selecione uma imagem.');
                return false;
            }

            return true;
        }

        function validatePesquisa() {
            var idUsuario = document.getElementById('id_usuario').value.trim();

            if (idUsuario === '') {
                alert('Por favor, insira um ID de usuário para pesquisar.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
