<?php
$id_mov = "";
$id_Produto_mov = "";
$id_Funcionario_mov = "";
$qtde_mov = "";
$tipo_mov = "";
$obs_mov = "";
$status_mov = "";

if (isset($_POST['Pesquisar'])) {
    include_once('../conexao.php');

    try {
        $sql = $conn->query('SELECT * FROM movimentacao WHERE id_mov=' . $_POST['id_mov']);

        if ($sql->rowCount() > 0) {
            foreach ($sql as $linha) {
                $id_mov = $linha['id_mov'];
                $id_Produto_mov = $linha['id_Produto_mov'];
                $id_Funcionario_mov = $linha['id_Funcionario_mov'];
                $qtde_mov = $linha['qtde_mov'];
                $tipo_mov = $linha['tipo_mov'];
                $obs_mov = $linha['obs_mov'];
                $status_mov = $linha['status_mov'];
            }
        } else {
            echo '<p>Movimentação não encontrada</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
