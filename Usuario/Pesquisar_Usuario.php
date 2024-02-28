<?php

$id_usuario = "";
$nome_Usuario = "";
$login_Usuario = "";
$senha_Usuario = "";
$data_Usuario = "";
$obs_Usuario = "";
$status_Usuario = "";

if (isset($_POST['Pesquisar'])) {

    include_once('conexao.php');

    try {

        $sql = $conn->query('SELECT * FROM usuario WHERE id_usuario=' . $_POST['id_usuario']);

        if ($sql->rowCount() > 0) {

            foreach ($sql as $linha) {

                $id_usuario = $linha[0];
                $nome_Usuario = $linha[1];
                $login_Usuario = $linha[2];
                $senha_Usuario = $linha[3];
                $data_Usuario = $linha[4];
                $obs_Usuario = $linha[5];
                $status_Usuario = $linha[6];
            }
        } else {
            echo '<p>Usuário não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
