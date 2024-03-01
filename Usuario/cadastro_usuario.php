<?php

if (isset($_POST['Cadastrar'])) {

    $arquivo = $_FILES['txtImg'];
    
    try {
        // Incluir o arquivo de conexão
        include_once('conexao.php');

        // Preparar a consulta SQL para inserção de usuário
        $sql = $conn->prepare(
            'INSERT INTO usuario
            (nome_usuario, login_usuario, senha_usuario, data_usuario, obs_usuario, status_usuario, img_usuario)
            VALUES
            (:nome_usuario, :login_usuario, :senha_usuario, NOW(), :obs_usuario, :status_usuario, :img_usuario)'
        );

        // Executar a consulta com os valores dos campos do formulário
        $sql->execute(array(
            ':nome_usuario' => $_POST['Nome'],
            ':login_usuario' => $_POST['Login'],
            ':senha_usuario' => $_POST['Senha'],
            ':obs_usuario' => $_POST['Observacao'],
            ':status_usuario' => $_POST['Status'],
            ':img_usuario' => $_FILES['txtImg']['name'], // Obter o nome do arquivo enviado
        ));

        // Verificar se a consulta foi bem-sucedida e redirecionar
        if ($sql->rowCount() > 0) {
            $mensagem = '<p>Cadastro realizado com sucesso</p> - ' . $sql->rowCount();
            $mensagem .= '<p>ID Gerado:' . $conn->lastInsertId() . '</p>';

            // Criar diretório para o usuário se não existir
            $pasta = 'imagens/' . $conn->lastInsertId() . '/';
            if (!file_exists($pasta)) {
                mkdir($pasta);
            }

            // Mover o arquivo de imagem para o diretório
            $foto = $pasta . $_FILES['txtImg']['name'];
            move_uploaded_file($_FILES['txtImg']['tmp_name'], $foto);

            // Redirecionar para a página de usuário com o ID do novo usuário
            header("Location: Sistema.php?tela=usuario&IDUsuario=" . $conn->lastInsertId());
            exit(); // Certifique-se de sair após o redirecionamento
        }
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
?>
