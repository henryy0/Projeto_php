<?php

$id_Produto = "";
$nome_Produto = "";
$data_Produto = "";
$qtde_Produto = "";
$Vcusto_Produto = "";
$Vvenda_Produto = "";
$obs_Produto = "";
$status_Produto = "";

if (isset($_POST['Pesquisar'])) {
    try {
        // Incluir o arquivo de conexão com o banco de dados
        include_once('conexao.php');

        // Preparar e executar a consulta SQL para pesquisar o produto com base no ID
        $sql = $conn->query('SELECT * FROM produto WHERE ID_Produto=' . $_POST['id_produto']);

        // Verificar se o resultado da consulta retornou algum registro
        if ($sql->rowCount() > 0) {
            // Loop através dos resultados da consulta
            foreach ($sql as $linha) {
                $id_Produto = $linha[0];
                $nome_Produto = $linha[1];
                $data_Produto = $linha[2];
                $qtde_Produto = $linha[3];
                $Vcusto_Produto = $linha[4];
                $Vvenda_Produto = $linha[5];
                $obs_Produto = $linha[6];
                $status_Produto = $linha[7];
            }
        } else {
            echo '<p>Produto não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage(); // Em caso de erro, exibe a mensagem de erro
    }
}

?>
