<?php

if (isset($_POST['Excluir'])) {

    include_once('conexao.php');

    try {

        $sql = $conn->prepare('DELETE FROM fornecedor WHERE ID_Fornecedor = :id_Fornecedor');

        $sql->execute(array(
            ':id_Fornecedor' => $_POST['ID_Fornecedor']
        ));

        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}

?>
