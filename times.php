PHP
<?php

// Conectando ao banco de dados SQLite
$db = new PDO('sqlite:times.db');

// Criando a tabela 'times'
$db->exec('CREATE TABLE IF NOT EXISTS times (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    cidade TEXT NOT NULL,
    estadio TEXT NOT NULL,
    fundacao DATE NOT NULL
)');

// Verificando a conexão
if (!$db) {
    echo "Erro ao conectar ao banco de dados: " . $db->errorCode();
    die();
}

echo "Tabela 'times' criada com sucesso!";