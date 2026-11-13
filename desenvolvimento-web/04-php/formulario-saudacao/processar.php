<?php
$nome = trim($_POST["nome"]);
$idade = trim($_POST["idade"]);

echo "<!DOCTYPE html>";
echo "<html lang='pt-br'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Resultado</title>";
echo "<link rel='stylesheet' href='style.css'>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";

if (filter_var($idade, FILTER_VALIDATE_INT) === false || $idade < 0) {
    echo "<h1>Idade inválida!</h1>";
    echo "<p>Digite uma idade válida.</p>";
} else {
    echo "<h1>Olá, " . htmlspecialchars($nome) . "!</h1>";
    echo "<p>Você tem " . htmlspecialchars($idade) . " anos.</p>";

    if ($idade >= 18) {
        echo "<p>Você é maior de idade.</p>";
    } else {
        echo "<p>Você é menor de idade.</p>";
    }
}

echo "<a href='index.php'>Voltar</a>";
echo "</div>";
echo "</body>";
echo "</html>";
?>