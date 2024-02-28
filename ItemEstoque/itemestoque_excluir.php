<?php
if (isset($_POST['Excluir'])) {
    include_once('conexao.php');
    try {
        $sql = $conn->prepare('DELETE FROM ItemEstoque WHERE id_ItemEstoque = :id_ItemEstoque');
        $sql->execute(array(
            ':id_ItemEstoque' => $_POST['id_ItemEstoque']
        ));

        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
?>
