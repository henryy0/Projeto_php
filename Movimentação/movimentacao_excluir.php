<?php
if (isset($_POST['Excluir'])) {
    include_once('../conexao.php');
    try {
        $sql = $conn->prepare('DELETE FROM movimentacao WHERE id_mov = :id_mov');
        $sql->execute(array(
            ':id_mov' => $_POST['id_mov']
        ));

        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro excluído com sucesso</p>';
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
?>
