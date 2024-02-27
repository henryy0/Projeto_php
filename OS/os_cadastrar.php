<?php
if (isset($_POST['Cadastrar'])) {
    try {
        include_once('../conexao.php');

        $sql = $conn->prepare('INSERT INTO OS (id_produto_os, qtde_os, obs_os, status_os) VALUES (:id_produto_os, :qtde_os, :obs_os, :status_os)');

        $sql->execute(array(
            ':id_produto_os' => $_POST['id_produto_os'],
            ':qtde_os' => $_POST['qtde_os'],
            ':obs_os' => $_POST['obs_os'],
            ':status_os' => $_POST['status_os'],
        ));

        if ($sql->rowCount() > 0) {
            echo '<p>OS cadastrada com sucesso</p>' . $sql->rowCount();
            echo '<p>ID Gerado: </p>' . $conn->lastInsertId() . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
