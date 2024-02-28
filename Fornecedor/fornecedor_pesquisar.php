<?php

$ID_Fornecedor = "";
$nome_Fornecedor = "";
$nasc_Fornecedor = "";
$data_Fornecedor = "";
$cnpj_Fornecedor = "";
$logradouro_Fornecedor = "";
$numero_Fornecedor = "";
$cep_Fornecedor = "";
$bairro_Fornecedor = "";
$cidade_Fornecedor = "";
$uf_Fornecedor = "";
$telefone1_Fornecedor = "";
$telefone2_Fornecedor = "";
$telefone3_Fornecedor = "";
$telefone4_Fornecedor = "";
$contato_Fornecedor = "";
$obs_Fornecedor = "";
$status_Fornecedor = "";

if (isset($_POST['Pesquisar'])) {

    include_once('conexao.php');

    try {

        $sql = $conn->query('SELECT * FROM fornecedor WHERE ID_Fornecedor=' . $_POST['ID_Fornecedor']);

        if ($sql->rowCount() > 0) {

            foreach ($sql as $linha) {

                $ID_Fornecedor = $linha[0];
                $nome_Fornecedor = $linha[1];
                $nasc_Fornecedor = $linha[2];
                $data_Fornecedor = $linha[3];
                $cnpj_Fornecedor = $linha[4];
                $logradouro_Fornecedor = $linha[5];
                $numero_Fornecedor = $linha[6];
                $cep_Fornecedor = $linha[7];
                $bairro_Fornecedor = $linha[8];
                $cidade_Fornecedor = $linha[9];
                $uf_Fornecedor = $linha[10];
                $telefone1_Fornecedor = $linha[11];
                $telefone2_Fornecedor = $linha[12];
                $telefone3_Fornecedor = $linha[13];
                $telefone4_Fornecedor = $linha[14];
                $contato_Fornecedor = $linha[15];
                $obs_Fornecedor = $linha[16];
                $status_Fornecedor = $linha[17];
            }
        } else {
            echo '<p>Fornecedor não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
