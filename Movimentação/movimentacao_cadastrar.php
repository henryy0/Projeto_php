<?php
if (isset($_POST['Cadastrar'])) {
    try {
        include_once('conexao.php');
        $sql = $conn->prepare(
            'INSERT INTO movimentacao
            (id_Produto_mov, id_Funcionario_mov, qtde_mov, tipo_mov, obs_mov, status_mov)
            VALUES
            (:id_Produto_mov, :id_Funcionario_mov, :qtde_mov, :tipo_mov, :obs_mov, :status_mov)'
        );

        $sql->execute(array(
            ':id_Produto_mov' => $_POST['id_Produto_mov'],
            ':id_Funcionario_mov' => $_POST['id_Funcionario_mov'],
            ':qtde_mov' => $_POST['qtde_mov'],
            ':tipo_mov' => $_POST['tipo_mov'],
            ':obs_mov' => $_POST['obs_mov'],
            ':status_mov' => $_POST['status_mov']
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
