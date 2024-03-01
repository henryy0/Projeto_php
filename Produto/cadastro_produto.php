<?php

if (isset($_POST['Cadastrar'])) {

    $arquivo = $_FILES['txtImg']; // Captura o arquivo de imagem enviado pelo formulário

    try {
        // Inclui o arquivo de conexão com o banco de dados
        include_once('conexao.php');

        // Prepara a consulta SQL para inserir um novo produto
        $sql = $conn->prepare(
            'INSERT INTO produto
            (nome_Produto, data_Produto, qtde_Produto, Vcusto_Produto, Vvenda_Produto, obs_Produto, status_Produto, img_Produto)
            VALUES
            (:nome_Produto, NOW(), :qtde_Produto, :Vcusto_Produto, :Vvenda_Produto, :obs_Produto, :status_Produto, :img_Produto)'
        );

        // Executa a consulta SQL com os valores fornecidos pelo formulário
        $sql->execute(array(
            ':nome_Produto' => $_POST['Nome'],
            ':qtde_Produto' => $_POST['Quantidade'],
            ':Vcusto_Produto' => $_POST['Vcusto'],
            ':Vvenda_Produto' => $_POST['Vvenda'],
            ':obs_Produto' => $_POST['Observacao'],
            ':status_Produto' => $_POST['Status'],
            ':img_Produto' => $_FILES['txtImg']['name'], // Obtém o nome do arquivo enviado
        ));

        // Verifica se o cadastro foi bem-sucedido
        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro realizado com sucesso</p> - ' . $sql->rowCount();
            $mensagem .= '<p>ID Gerado:' . $conn->lastInsertId() . '</p>';

            // Cria o diretório para o produto se não existir
            $pasta = 'produtos/' . $conn->lastInsertId() . '/';
            if (!file_exists($pasta)) {
                mkdir($pasta);
            }

            // Move o arquivo de imagem para o diretório
            $foto = $pasta . $_FILES['txtImg']['name'];
            move_uploaded_file($_FILES['txtImg']['tmp_name'], $foto);

            // Redireciona para a página do produto com o ID do novo produto
            header("Location: Sistema.php?tela=produto&IDproduto=" . $conn->lastInsertId());
            exit(); // Certifique-se de sair após o redirecionamento
        }
    } catch (PDOException $error) {
        echo $error->getMessage(); // Em caso de erro, exibe a mensagem de erro
    }
}
?>
