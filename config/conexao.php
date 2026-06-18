<?php

$host   = 'localhost';
$dbname = 'biblioteca';
$user   = 'matheus';
$senha  = '123456';

try {
    // 1) Cria a conexão PDO
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $senha
    );

    // 2) Lança exceções em caso de erro (em vez de avisos silenciosos)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3) Retorna cada linha como array associativo (FETCH_ASSOC)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Em caso de falha, interrompe a execução e mostra a mensagem do erro
    exit('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}










