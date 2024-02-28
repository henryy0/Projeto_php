<?php

if (isset($_POST['Excluir'])) {
    try {
        // Inclua o arquivo de conexão com o banco de dados
        include_once('conexao.php');

        // Preparar a consulta SQL para excluir o produto com base no ID
        $sql = $conn->prepare('DELETE FROM produto WHERE ID_Produto = :id_Produto');

        // Executar a consulta SQL com o ID do produto a ser excluído
        $sql->execute(array(
            ':id_Produto' => $_POST['id_produto']
        ));

        // Verificar se o registro foi excluído com sucesso
        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso.</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage(); // Em caso de erro, exibe a mensagem de erro
    }
}

?>
