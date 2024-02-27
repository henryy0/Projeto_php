<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('../conexao.php');

        $sql = $conn->prepare('UPDATE OS SET id_produto_os = :id_produto_os, qtde_os = :qtde_os, obs_os = :obs_os, status_os = :status_os WHERE id_os = :id_os');

        $sql->execute(array(
            ':id_os' => $_POST['id_os'],
            ':id_produto_os' => $_POST['id_produto_os'],
            ':qtde_os' => $_POST['qtde_os'],
            ':obs_os' => $_POST['obs_os'],
            ':status_os' => $_POST['status_os'],
        ));

        if ($sql->rowCount() > 0) {
            echo '<p>OS alterada com sucesso</p>' . $sql->rowCount();
            echo '<p>ID Alteração: </p>' . $_POST['id_os'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
