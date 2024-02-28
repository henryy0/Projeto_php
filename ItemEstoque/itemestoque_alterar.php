<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');
        $sql = $conn->prepare(
            'UPDATE ItemEstoque SET
            id_produto_ItemEstoque = :id_produto_ItemEstoque,
            id_localEstoque_ItemEstoque = :id_localEstoque_ItemEstoque,
            obs_os = :obs_os,
            status_os = :status_os
            WHERE id_ItemEstoque = :id_ItemEstoque'
        );

        $sql->execute(array(
            ':id_ItemEstoque' => $_POST['id_ItemEstoque'],
            ':id_produto_ItemEstoque' => $_POST['id_produto_ItemEstoque'],
            ':id_localEstoque_ItemEstoque' => $_POST['id_localEstoque_ItemEstoque'],
            ':obs_os' => $_POST['obs_os'],
            ':status_os' => $_POST['status_os']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Dados alterados com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['id_ItemEstoque'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
};
?>
