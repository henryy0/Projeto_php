<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');
        $sql = $conn->prepare(
            'UPDATE movimentacao SET
            id_Produto_mov = :id_Produto_mov,
            id_Funcionario_mov = :id_Funcionario_mov,
            qtde_mov = :qtde_mov,
            tipo_mov = :tipo_mov,
            obs_mov = :obs_mov,
            status_mov = :status_mov
            WHERE id_mov = :id_mov'
        );

        $sql->execute(array(
            ':id_mov' => $_POST['id_mov'],
            ':id_Produto_mov' => $_POST['id_Produto_mov'],
            ':id_Funcionario_mov' => $_POST['id_Funcionario_mov'],
            ':qtde_mov' => $_POST['qtde_mov'],
            ':tipo_mov' => $_POST['tipo_mov'],
            ':obs_mov' => $_POST['obs_mov'],
            ':status_mov' => $_POST['status_mov']
        ));

        if ($sql->rowCount() > 0) {
            echo '<p> Dados alterados com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['id_mov'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }

    
};
?>
