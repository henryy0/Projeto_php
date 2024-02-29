<?php
// Credenciais de conexão com o banco de dados
$host = 'localhost';
$dbname = 'Projeto_php';
$username = 'root';
$password = '';

// Função para carregar combobox
function carregarComboBox($conexao, $tipo) {
    switch ($tipo) {
        case 'produtos':
            $sql = "SELECT ID_Produto, nome_Produto FROM produto";
            break;
        case 'funcionarios':
            $sql = "SELECT ID_Funcionario, nome_Funcionario FROM funcionario";
            break;
        case 'local':
            $sql = "SELECT id_LocalEstoque, nome_LocalEstoque FROM LocalEstoque";
            break;
        default:
            return; // Tipo inválido, retorna sem preencher a combobox
    }

    $result = $conexao->query($sql);

    // Preenche a combobox
    while ($row = $result->fetch_assoc()) {
        if ($tipo === 'produtos') {
            echo "<option value='" . $row['ID_Produto'] . "'>" . $row['nome_Produto'] . "</option>";
        } elseif ($tipo === 'funcionarios') {
            echo "<option value='" . $row['ID_Funcionario'] . "'>" . $row['nome_Funcionario'] . "</option>";
        }
        elseif ($tipo === 'local') {
            echo "<option value='" . $row['id_LocalEstoque'] . "'>" . $row['nome_LocalEstoque'] . "</option>";
        }
    }
}

// Estabelece a conexão com o banco de dados
$conexao = new mysqli($host, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
