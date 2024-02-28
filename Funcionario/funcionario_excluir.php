<?php

if (isset($_POST['Excluir'])) {

    include_once('conexao.php');

    try {

        $sql = $conn->prepare('DELETE FROM funcionario WHERE ID_Funcionario = :id_Funcionario');

        $sql->execute(array(
            ':id_Funcionario' => $_POST['ID_Funcionario']
        ));

        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}

?>
