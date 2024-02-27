<?php

if (isset($_POST['Excluir'])) {

    include_once('../conexao.php');

    try {

        $sql = $conn->prepare('DELETE FROM usuario WHERE id_usuario = :id_Usuario');

        $sql->execute(array(
            ':id_Usuario' => $_POST['ID_Usuario']
        ));

        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}

?>
