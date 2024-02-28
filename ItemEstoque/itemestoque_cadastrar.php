<?php
if (isset($_POST['Cadastrar'])) {
    try {
        include_once('conexao.php');
        $sql = $conn->prepare(
            'INSERT INTO ItemEstoque
            (id_produto_ItemEstoque, id_localEstoque_ItemEstoque, obs_os, status_os)
            VALUES
            (:id_produto_ItemEstoque, :id_localEstoque_ItemEstoque, :obs_os, :status_os)'
        );

        $sql->execute(array(
            ':id_produto_ItemEstoque' => $_POST['id_produto_ItemEstoque'],
            ':id_localEstoque_ItemEstoque' => $_POST['id_localEstoque_ItemEstoque'],
            ':obs_os' => $_POST['obs_os'],
            ':status_os' => $_POST['status_os']
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
