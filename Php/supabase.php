<?php
$host = 'oisotpmyjrzelfgjxuou.supabase.co'; // Host do Supabase, SEM https://
$port = '6543';                  // Porta do Supabase
$dbname = 'postgres';            // Nome do banco
$user = 'postgres';              // Usuário do banco
$password = 'SenhaSupaBase';     // Senha do Supabase

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
