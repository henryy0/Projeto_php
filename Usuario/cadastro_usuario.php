<?php

if (isset($_POST['Cadastrar'])) {

    try {

        include_once('conexao.php');

        $sql = $conn->prepare(
            'INSERT INTO usuario
                (nome_usuario, login_usuario, senha_usuario, data_usuario, obs_usuario, status_usuario)
                VALUES
                (:nome_usuario, :login_usuario, :senha_usuario, NOW(), :obs_usuario, :status_usuario)'
        );

        $sql->execute(array(
            ':nome_usuario' => $_POST['Nome'],
            ':login_usuario' => $_POST['Login'],
            ':senha_usuario' => $_POST['Senha'],
            ':obs_usuario' => $_POST['Observacao'],
            ':status_usuario' => $_POST['Status'],
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Cadastro realizado com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Gerado </p>' . $conn->lastInsertId() . '</p>';
        }

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
