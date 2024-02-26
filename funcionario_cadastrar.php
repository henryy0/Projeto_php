<?php

if (isset($_POST['Cadastrar'])) {

    try {

        include_once('conexao.php');

        $sql = $conn->prepare(
            'INSERT INTO funcionario
                (nome_Funcionario, nasc_Funcionario, data_Funcionario, cpf_Funcionario, logradouro_Funcionario, numero_Funcionario, comp_funcionario, cep_Funcionario, bairro_Funcionario, cidade_Funcionario, uf_Funcionario, telefone1_Funcionario, telefone2_Funcionario, telefone3_Funcionario, telefone4_Funcionario, obs_Funcionario, status_Funcionario)
                VALUES
                (:nome_Funcionario, :nasc_Funcionario, :data_Funcionario, :cpf_Funcionario, :logradouro_Funcionario, :numero_Funcionario, :comp_funcionario, :cep_Funcionario, :bairro_Funcionario, :cidade_Funcionario, :uf_Funcionario, :telefone1_Funcionario, :telefone2_Funcionario, :telefone3_Funcionario, :telefone4_Funcionario, :obs_Funcionario, :status_Funcionario)'
        );

        $sql->execute(array(
            ':nome_Funcionario' => $_POST['Nome'],
            ':nasc_Funcionario' => $_POST['Nascimento'],
            ':data_Funcionario' => $_POST['Data_Admissao'], 
            ':cpf_Funcionario' => $_POST['CPF'],
            ':logradouro_Funcionario' => $_POST['Logradouro'],
            ':numero_Funcionario' => $_POST['Numero'],
            ':comp_funcionario' => $_POST['Complemento'],
            ':cep_Funcionario' => $_POST['CEP'],
            ':bairro_Funcionario' => $_POST['Bairro'],
            ':cidade_Funcionario' => $_POST['Cidade'],
            ':uf_Funcionario' => $_POST['UF'],
            ':telefone1_Funcionario' => $_POST['Telefone1'],
            ':telefone2_Funcionario' => $_POST['Telefone2'],
            ':telefone3_Funcionario' => $_POST['Telefone3'],
            ':telefone4_Funcionario' => $_POST['Telefone4'],
            ':obs_Funcionario' => $_POST['Observacao'],
            ':status_Funcionario' => $_POST['Status'],
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
