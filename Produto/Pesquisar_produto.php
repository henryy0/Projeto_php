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
        // Inclua o arquivo de conexão com o banco de dados
        include_once('../conexao.php');

        // Preparar e executar a consulta SQL para pesquisar o produto com base no ID
        $sql = $conn->query('SELECT * FROM produto WHERE ID_Produto=' . $_POST['ID_Produto']);

        // Verificar se o resultado da consulta retornou algum registro
        if ($sql->rowCount() > 0) {
            // Loop através dos resultados da consulta
            foreach ($sql as $linha) {
                $id_Produto = $linha['ID_Produto'];
                $nome_Produto = $linha['nome_Produto'];
                $data_Produto = $linha['data_Produto'];
                $qtde_Produto = $linha['qtde_Produto'];
                $Vcusto_Produto = $linha['Vcusto_Produto'];
                $Vvenda_Produto = $linha['Vvenda_Produto'];
                $obs_Produto = $linha['obs_Produto'];
                $status_Produto = $linha['status_Produto'];
            }
        } else {
            echo '<p>Produto não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage(); // Em caso de erro, exibe a mensagem de erro
    }
}

?>
