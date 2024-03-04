<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');

        $id_usuario = $_POST['id_usuario'];
        $nome_usuario = $_POST['Nome'];
        $login_usuario = $_POST['Login'];
        $senha_usuario = $_POST['Senha'];
        $obs_usuario = $_POST['Observacao'];
        $status_usuario = $_POST['Status'];

        // Verifica se um novo arquivo de imagem foi enviado
        if ($_FILES['txtImg']['error'] === UPLOAD_ERR_OK) {
            // Remove a imagem anterior, se necessário
            $consulta_imagem = $conn->prepare("SELECT img_usuario FROM usuario WHERE id_usuario = :id_usuario");
            $consulta_imagem->execute(array(':id_usuario' => $id_usuario));
            $imagem_anterior = $consulta_imagem->fetchColumn();

            if ($imagem_anterior) {
                unlink("imagens/{$id_usuario}/{$imagem_anterior}");
            }

            // Move o novo arquivo de imagem para o diretório
            $img_Usuario = $_FILES['txtImg']['name'];
            move_uploaded_file($_FILES['txtImg']['tmp_name'], "imagens/{$id_usuario}/{$img_Usuario}");

            // Atualiza os dados do usuário, incluindo a imagem
            $sql = $conn->prepare(
                'UPDATE usuario SET
                    nome_usuario = :nome_usuario,
                    login_usuario = :login_usuario,
                    senha_usuario = :senha_usuario,
                    obs_usuario = :obs_usuario,
                    status_usuario = :status_usuario,
                    img_usuario = :img_usuario
                WHERE id_usuario = :id_usuario'
            );
            $sql->execute(array(
                ':id_usuario' => $id_usuario,
                ':nome_usuario' => $nome_usuario,
                ':login_usuario' => $login_usuario,
                ':senha_usuario' => $senha_usuario,
                ':obs_usuario' => $obs_usuario,
                ':status_usuario' => $status_usuario,
                ':img_usuario' => $img_Usuario
            ));
        } else {
            // Se nenhum novo arquivo de imagem foi enviado, atualiza apenas os outros campos
            $sql = $conn->prepare(
                'UPDATE usuario SET
                    nome_usuario = :nome_usuario,
                    login_usuario = :login_usuario,
                    senha_usuario = :senha_usuario,
                    obs_usuario = :obs_usuario,
                    status_usuario = :status_usuario
                WHERE id_usuario = :id_usuario'
            );
            $sql->execute(array(
                ':id_usuario' => $id_usuario,
                ':nome_usuario' => $nome_usuario,
                ':login_usuario' => $login_usuario,
                ':senha_usuario' => $senha_usuario,
                ':obs_usuario' => $obs_usuario,
                ':status_usuario' => $status_usuario
            ));
        }

        if ($sql->rowCount() > 0) {
            echo '<p> Dados alterados com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $id_usuario . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
