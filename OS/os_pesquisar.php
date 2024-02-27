<?php
$id_os = "";
$id_produto_os = "";
$data_os = "";
$qtde_os = "";
$obs_os = "";
$status_os = "";

if (isset($_POST['Pesquisar'])) {
    include_once('../conexao.php');
    try {
        $sql = $conn->query('SELECT * FROM OS WHERE id_os=' . $_POST['id_os']);

        if ($sql->rowCount() > 0) {
            foreach ($sql as $linha) {
                $id_os = $linha[0];
                $id_produto_os = $linha[1];
                $data_os = $linha[2];
                $qtde_os = $linha[3];
                $obs_os = $linha[4];
                $status_os = $linha[5];
            }
        } else {
            echo '<p>OS não encontrada</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
