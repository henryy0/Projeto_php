<?php
if (isset($_POST['Excluir'])) {
    include_once('conexao.php');
    try {
        $sql = $conn->prepare('DELETE FROM OS WHERE id_os = :id_os');

        $sql->execute(array(
            ':id_os' => $_POST['id_os']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p>OS excluída com sucesso</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
