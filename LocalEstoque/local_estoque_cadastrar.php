<?php

if (isset($_POST['Cadastrar'])) {
    try {
        include_once('conexao.php');
        
        $sql = $conn->prepare('INSERT INTO LocalEstoque (nome_LocalEstoque, obs_LocalEstoque, status_LocalEstoque) VALUES (:nome_LocalEstoque, :obs_LocalEstoque, :status_LocalEstoque)');
        
        $sql->execute(array(
            ':nome_LocalEstoque' => $_POST['Nome'],
            ':obs_LocalEstoque' => $_POST['Observacao'],
            ':status_LocalEstoque' => $_POST['Status']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Cadastro realizado com sucesso</p>';
            echo '<p> ID Gerado: ' . $conn->lastInsertId() . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
