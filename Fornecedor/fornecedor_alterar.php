<?php

if (isset($_POST['Alterar'])) {

    try {

        include_once('conexao.php');

        $sql = $conn->prepare(
            'UPDATE fornecedor SET
                nome_Fornecedor = :nome_Fornecedor,
                nasc_Fornecedor = :nasc_Fornecedor,
                data_Fornecedor = :data_Fornecedor,
                cnpj_Fornecedor = :cnpj_Fornecedor,
                logradouro_Fornecedor = :logradouro_Fornecedor,
                numero_Fornecedor = :numero_Fornecedor,
                cep_Fornecedor = :cep_Fornecedor,
                bairro_Fornecedor = :bairro_Fornecedor,
                cidade_Fornecedor = :cidade_Fornecedor,
                uf_Fornecedor = :uf_Fornecedor,
                telefone1_Fornecedor = :telefone1_Fornecedor,
                telefone2_Fornecedor = :telefone2_Fornecedor,
                telefone3_Fornecedor = :telefone3_Fornecedor,
                telefone4_Fornecedor = :telefone4_Fornecedor,
                contato_Fornecedor = :contato_Fornecedor,
                obs_Fornecedor = :obs_Fornecedor,
                status_Fornecedor = :status_Fornecedor
            WHERE ID_Fornecedor = :id_Fornecedor'
        );

        $sql->execute(array(
            ':id_Fornecedor' => $_POST['ID_Fornecedor'],
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
            echo '<p> Dados alterados com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['ID_Fornecedor'] . '</p>';
        }
    } catch (PDOException $error) {

        echo $error->getMessage();
    }
};

?>
