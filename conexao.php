<?php
// Credenciais de conexão com o banco de dados
$host = 'localhost';
$dbname = 'Projeto_php';
$username = 'root';
$password = '';

try {
    // Cria uma nova conexão PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Define o modo de erro PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define o conjunto de caracteres para UTF-8
    $conn->exec("set names utf8");

    // Exibe mensagem de sucesso
    echo "Conexão bem sucedida!";
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro de conexão: " . $e->getMessage();
}
