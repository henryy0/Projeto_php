<?php

if (isset($_POST['Excluir'])) {
    include_once('conexao.php');
    
    try {
        $sql = $conn->prepare('DELETE FROM LocalEstoque WHERE id_LocalEstoque = :id_LocalEstoque');
        
        $sql->execute(array(
            ':id_LocalEstoque' => $_POST['ID_LocalEstoque']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
