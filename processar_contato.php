<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode fazer o envio de e-mail ou salvar os dados no banco de dados.
    // Por enquanto, vamos apenas mostrar os dados recebidos.
    
    echo "<h2>Mensagem Recebida!</h2>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";
}
?>
