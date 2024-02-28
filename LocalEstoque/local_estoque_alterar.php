<?php

if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');
        
        $sql = $conn->prepare('UPDATE LocalEstoque SET nome_LocalEstoque = :nome_LocalEstoque, obs_LocalEstoque = :obs_LocalEstoque, status_LocalEstoque = :status_LocalEstoque WHERE id_LocalEstoque = :id_LocalEstoque');
        
        $sql->execute(array(
            ':id_LocalEstoque' => $_POST['ID_LocalEstoque'],
            ':nome_LocalEstoque' => $_POST['Nome'],
            ':obs_LocalEstoque' => $_POST['Observacao'],
            ':status_LocalEstoque' => $_POST['Status']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Dados alterados com sucesso</p>';
            echo '<p> ID Alteração: ' . $_POST['ID_LocalEstoque'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
