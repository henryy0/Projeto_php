<?php

if (isset($_POST['Cadastrar'])) {
    try {
        // Inclua o arquivo de conexão com o banco de dados
        include_once('../conexao.php');

        // Preparar a consulta SQL para inserir um novo produto
        $sql = $conn->prepare(
            'INSERT INTO produto
                (nome_Produto, data_Produto, qtde_Produto, Vcusto_Produto, Vvenda_Produto, obs_Produto, status_Produto)
                VALUES
                (:nome_Produto, NOW(), :qtde_Produto, :Vcusto_Produto, :Vvenda_Produto, :obs_Produto, :status_Produto)'
        );

        // Executar a consulta SQL com os valores fornecidos pelo formulário
        $sql->execute(array(
            ':nome_Produto' => $_POST['Nome'],
            ':qtde_Produto' => $_POST['Quantidade'],
            ':Vcusto_Produto' => $_POST['ValorCusto'],
            ':Vvenda_Produto' => $_POST['ValorVenda'],
            ':obs_Produto' => $_POST['Observacao'],
            ':status_Produto' => $_POST['Status'],
        ));

        // Verificar se o cadastro foi bem-sucedido
        if ($sql->rowCount() > 0) {
            echo '<p> Cadastro realizado com sucesso. </p>';
            echo '<p> ID Gerado: ' . $conn->lastInsertId() . '</p>';
        }

    } catch (PDOException $error) {
        echo $error->getMessage(); // Em caso de erro, exibe a mensagem de erro
    }
}

?>
