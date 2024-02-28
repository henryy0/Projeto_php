<?php

$ID_LocalEstoque = "";
$nome_LocalEstoque = "";
$obs_LocalEstoque = "";
$status_LocalEstoque = "";

if (isset($_POST['Pesquisar'])) {
    include_once('conexao.php');
    
    try {
        $sql = $conn->query('SELECT * FROM LocalEstoque WHERE id_LocalEstoque=' . $_POST['ID_LocalEstoque']);
        
        if ($sql->rowCount() > 0) {
            foreach ($sql as $linha) {
                $ID_LocalEstoque = $linha[0];
                $nome_LocalEstoque = $linha[1];
                $obs_LocalEstoque = $linha[3];
                $status_LocalEstoque = $linha[4];
            }
        } else {
            echo '<p>Local de estoque não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
