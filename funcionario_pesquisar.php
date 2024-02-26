<?php

$ID_Funcionario = "";
$nome_Funcionario = "";
$nasc_Funcionario = "";
$data_Funcionario = "";
$cpf_Funcionario = "";
$logradouro_Funcionario = "";
$numero_Funcionario = "";
$comp_funcionario = "";
$cep_Funcionario = "";
$bairro_Funcionario = "";
$cidade_Funcionario = "";
$uf_Funcionario = "";
$telefone1_Funcionario = "";
$telefone2_Funcionario = "";
$telefone3_Funcionario = "";
$telefone4_Funcionario = "";
$obs_Funcionario = "";
$status_Funcionario = "";

if (isset($_POST['Pesquisar'])) {

    include_once('conexao.php');

    try {

        $sql = $conn->query('SELECT * FROM funcionario WHERE ID_Funcionario=' . $_POST['ID_Funcionario']);

        if ($sql->rowCount() > 0) {

            foreach ($sql as $linha) {

                $ID_Funcionario = $linha[0];
                $nome_Funcionario = $linha[1];
                $nasc_Funcionario = $linha[2];
                $data_Funcionario = $linha[3];
                $cpf_Funcionario = $linha[4];
                $logradouro_Funcionario = $linha[5];
                $numero_Funcionario = $linha[6];
                $comp_funcionario = $linha[7];
                $cep_Funcionario = $linha[8];
                $bairro_Funcionario = $linha[9];
                $cidade_Funcionario = $linha[10];
                $uf_Funcionario = $linha[11];
                $telefone1_Funcionario = $linha[12];
                $telefone2_Funcionario = $linha[13];
                $telefone3_Funcionario = $linha[14];
                $telefone4_Funcionario = $linha[15];
                $obs_Funcionario = $linha[16];
                $status_Funcionario = $linha[17];
            }
        } else {
            echo '<p>Funcionário não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
