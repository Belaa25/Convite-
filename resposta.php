<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a resposta do formulário
    $resposta = $_POST['resposta'];

    // Redireciona com base na resposta
    if ($resposta == "sim") {
        header("Location: sim.html");
        exit();
    } elseif ($resposta == "nao") {
        header("Location: nao.html");
        exit();
    } else {
        echo "Resposta inválida.";
    }
} else {
    echo "Nenhuma resposta recebida.";
}
?>