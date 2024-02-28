<?php

if (isset($_POST['Alterar'])) {

    try {

        include_once('conexao.php');

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
            ':id_usuario' => $_POST['ID_Usuario'],
            ':nome_usuario' => $_POST['Nome'],
            ':login_usuario' => $_POST['Login'],
            ':senha_usuario' => $_POST['Senha'],
            ':obs_usuario' => $_POST['Observacao'],
            ':status_usuario' => $_POST['Status'],
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Dados alterados com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['ID_Usuario'] . '</p>';
        }
    } catch (PDOException $error) {

        echo $error->getMessage();
    }
};

?>
