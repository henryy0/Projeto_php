<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');
        $sql = $conn->prepare(
            'UPDATE produto SET
                nome_Produto = :nome_produto,
                qtde_Produto = :qtde_produto,
                Vcusto_Produto = :vcusto_produto,
                Vvenda_Produto = :vvenda_produto,
                obs_Produto = :obs_produto,
                status_Produto = :status_produto
            WHERE ID_Produto = :id_produto'
        );
        $sql->execute(array(
            ':id_produto' => $_POST['id_produto'],
            ':nome_produto' => $_POST['Nome'],
            ':qtde_produto' => $_POST['Quantidade'],
            ':vcusto_produto' => $_POST['Vcusto'],
            ':vvenda_produto' => $_POST['Vvenda'],
            ':obs_produto' => $_POST['Observacao'],
            ':status_produto' => $_POST['status_produto']
        ));
        if ($sql->rowCount() > 0) {
            echo '<p> Produto alterado com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['id_produto'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
