<?php

// Incluindo o arquivo de conexão
include('times.php');

// Obtem o ID do time do parâmetro GET
$idTime = !empty($_GET['id'])?$_GET['id']:null;

// Se um ID foi especificado, busca o time específico
if ($idTime) {
    $sql = "SELECT * FROM times WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $idTime, PDO::PARAM_INT);
    $stmt->execute();
    $time = $stmt->fetch();

    if ($time) {
        echo "**Detalhes do Time:**<br>";
        echo "<br>ID: " . $time['id'];
        echo "<br>Nome: " . $time['nome'];
        echo "<br>Cidade: " . $time['cidade'];
        echo "<br>Estádio: " . $time['estadio'];
        echo "<br>Fundação: " . $time['fundacao'];
        echo "<br><a href='exibir_times.php'>Voltar</a>";
    } else {
        echo "Time com ID $idTime não encontrado.";
    }
} else {
    // Se nenhum ID foi especificado, exibe todos os times
    $sql = "SELECT * FROM times";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $times = $stmt->fetchAll();

    echo "**Lista de Times:**";
    echo "<br>";
    foreach ($times as $time) {
        echo "<a href='exibir_times.php?id=" . $time['id'] . "'>" . $time['nome'] . "</a><br>";
    }
}
