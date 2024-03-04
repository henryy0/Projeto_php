<?php
if (isset($_POST['Alterar'])) {
    try {
        include_once('conexao.php');

        // Verifica se um novo arquivo de imagem foi enviado
        if ($_FILES['txtImg']['error'] === UPLOAD_ERR_OK) {
            // Remove a imagem anterior, se necessário
            // Substitua "id_do_produto" pelo valor adequado
            $id_produto = $_POST['id_produto'];
            $consulta_imagem = $conn->prepare("SELECT img_Produto FROM produto WHERE ID_Produto = :id_produto");
            $consulta_imagem->execute(array(':id_produto' => $id_produto));
            $imagem_anterior = $consulta_imagem->fetchColumn();

            // Se houver uma imagem anterior, exclua-a
            if ($imagem_anterior) {
                unlink("produtos/{$id_produto}/{$imagem_anterior}");
            }

            // Atualiza a imagem do produto
            $nova_imagem = $_FILES['txtImg']['name'];
            move_uploaded_file($_FILES['txtImg']['tmp_name'], "produtos/{$id_produto}/{$nova_imagem}");

            $sql = $conn->prepare(
                'UPDATE produto SET
                    nome_Produto = :nome_produto,
                    qtde_Produto = :qtde_produto,
                    Vcusto_Produto = :vcusto_produto,
                    Vvenda_Produto = :vvenda_produto,
                    obs_Produto = :obs_produto,
                    status_Produto = :status_produto,
                    img_Produto = :img_produto
                WHERE ID_Produto = :id_produto'
            );
            $sql->execute(array(
                ':id_produto' => $id_produto,
                ':nome_produto' => $_POST['Nome'],
                ':qtde_produto' => $_POST['Quantidade'],
                ':vcusto_produto' => $_POST['Vcusto'],
                ':vvenda_produto' => $_POST['Vvenda'],
                ':obs_produto' => $_POST['Observacao'],
                ':status_produto' => $_POST['Status'],
                ':img_produto' => $nova_imagem
            ));
        } else {
            // Se nenhum novo arquivo de imagem foi enviado, atualize apenas os outros campos
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
                ':status_produto' => $_POST['Status']
            ));
        }

        if ($sql->rowCount() > 0) {
            echo '<p> Produto alterado com sucesso</p>' . $sql->rowCount();
            echo '<p> ID Alteração </p>' . $_POST['id_produto'] . '</p>';
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>
