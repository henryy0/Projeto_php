<?php
$id_ItemEstoque = "";
$id_produto_ItemEstoque = "";
$id_localEstoque_ItemEstoque = "";
$obs_os = "";
$status_os = "";

if (isset($_POST['Pesquisar'])) {
    include_once('conexao.php');

    try {
        $sql = $conn->query('SELECT * FROM ItemEstoque WHERE id_ItemEstoque=' . $_POST['id_ItemEstoque']);

        if ($sql->rowCount() > 0) {
            foreach ($sql as $linha) {
                $id_ItemEstoque = $linha['id_ItemEstoque'];
                $id_produto_ItemEstoque = $linha['id_produto_ItemEstoque'];
                $id_localEstoque_ItemEstoque = $linha['id_localEstoque_ItemEstoque'];
                $obs_os = $linha['obs_os'];
                $status_os = $linha['status_os'];
            }
        } else {
            echo '<p>Item de Estoque não encontrado</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
