<?php

// Incluindo o arquivo de conexão
include('times.php');

// Inserindo times
$db->exec('INSERT INTO times (nome, cidade, estadio, fundacao) VALUES
    ("Palmeiras", "São Paulo", "Allianz Parque", "1914-08-20"),
    ("Corinthians", "São Paulo", "Neo Química Arena", "1910-09-01"),
    ("São Paulo", "São Paulo", "Morumbi", "1935-01-25"),
    ("Santos", "Santos", "Vila Belmiro", "1913-04-03"),
    ("Flamengo", "Rio de Janeiro", "Maracanã", "1895-11-13")
');

echo "Times inseridos com sucesso!";