<?php

if (isset($_POST['Cadastrar'])) {

    try {

        include_once('conexao.php');

        $sql = $conn->prepare(
            'INSERT INTO fornecedor
                (nome_Fornecedor, nasc_Fornecedor, data_Fornecedor, cnpj_Fornecedor, logradouro_Fornecedor, numero_Fornecedor, cep_Fornecedor, bairro_Fornecedor, cidade_Fornecedor, uf_Fornecedor, telefone1_Fornecedor, telefone2_Fornecedor, telefone3_Fornecedor, telefone4_Fornecedor, contato_Fornecedor, obs_Fornecedor, status_Fornecedor)
                VALUES
                (:nome_Fornecedor, :nasc_Fornecedor, :data_Fornecedor, :cnpj_Fornecedor, :logradouro_Fornecedor, :numero_Fornecedor, :cep_Fornecedor, :bairro_Fornecedor, :cidade_Fornecedor, :uf_Fornecedor, :telefone1_Fornecedor, :telefone2_Fornecedor, :telefone3_Fornecedor, :telefone4_Fornecedor, :contato_Fornecedor, :obs_Fornecedor, :status_Fornecedor)'
        );

        $sql->execute(array(
            ':nome_Fornecedor' => $_POST['Nome'],
            ':nasc_Fornecedor' => $_POST['Nascimento'],
            ':data_Fornecedor' => $_POST['Data_Registro'],
            ':cnpj_Fornecedor' => $_POST['CNPJ'],
            ':logradouro_Fornecedor' => $_POST['Logradouro'],
            ':numero_Fornecedor' => $_POST['Numero'],
            ':cep_Fornecedor' => $_POST['CEP'],
            ':bairro_Fornecedor' => $_POST['Bairro'],
            ':cidade_Fornecedor' => $_POST['Cidade'],
            ':uf_Fornecedor' => $_POST['UF'],
            ':telefone1_Fornecedor' => $_POST['Telefone1'],
            ':telefone2_Fornecedor' => $_POST['Telefone2'],
            ':telefone3_Fornecedor' => $_POST['Telefone3'],
            ':telefone4_Fornecedor' => $_POST['Telefone4'],
            ':contato_Fornecedor' => $_POST['Contato'],
            ':obs_Fornecedor' => $_POST['Observacao'],
            ':status_Fornecedor' => $_POST['Status'],
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Cadastro realizado com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Gerado </p>' . $conn->lastInsertId() . '</p>';
        }

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
