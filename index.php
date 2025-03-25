<?php
// Definir o título da página dinamicamente
$pageTitle = "Meu Portfólio de Sites";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
            <h1><?php echo $pageTitle; ?></h1>
        </div>
        <nav>
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção Sobre -->
    <section id="sobre">
        <h2>Sobre Mim</h2>
        <p>Olá! Sou um desenvolvedor de sites, com experiência em PHP, JavaScript e MySQL. Aqui estão alguns dos projetos que já desenvolvi.</p>
    </section>

    <!-- Seção de Projetos -->
    <section id="projetos">
        <h2>Meus Projetos</h2>
        <?php
        // Definir os projetos dinamicamente
        $projetos = [
            [
                'titulo' => 'Modelo Empresarial',
                'descricao' => 'Este projeto é para um cliente, onde apenas seus funcionários podem acessar o site com login e senha.',
                'imagem' => 'projeto1.png'
            ],
            [
                'titulo' => 'Projeto 2',
                'descricao' => 'Descrição do projeto 2.',
                'imagem' => 'projeto2.png'
            ]
        ];

        // Loop para exibir os projetos
        foreach ($projetos as $projeto) {
            echo '<div class="projeto">';
            echo '<img src="assets/' . $projeto['imagem'] . '" alt="' . $projeto['titulo'] . '">';
            echo '<h3>' . $projeto['titulo'] . '</h3>';
            echo '<p>' . $projeto['descricao'] . '</p>';
            echo '</div>';
        }
        ?>
    </section>

    <!-- Seção de Contato -->
    <section id="contato">
        <h2>Entre em Contato</h2>
        <form method="POST" action="processar_contato.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025 Meu Portfólio - Todos os direitos reservados.</p>
    </footer>

</body>
</html>
