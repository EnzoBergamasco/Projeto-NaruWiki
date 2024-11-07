<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIKIPÉDIA NARUTO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    
        <div class="logo">
            <img src="assets/images/naruto logo.png" width="100"/>
            <H1>WIKIPÉDIA NARUTO</H1>

            <div class ="links">
                <a href="login.php">Login</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
 

    <div class="bar">Tudo sobre NARUTO</div>

    <div class="content">
        <div class="sidebar">
            <h2>Conteúdo</h2>
            <ul>
                <li><a href="index.php">Naruto</a></li>
                <li><a href="personagens.php">Personagens</a></li>
                <li><a href="producao.php">Produção</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="about.php">Sobre nós</a></li>
            </ul>
            <br>
            <figure>
                <img src="assets/images/narutosidebar.png" height="250">
            </figure>
        </div>

        <div class="main">
            <h1>Sobre nós</h1>
            <fieldset>
            <b><p>Bem-vindo ao nosso site dedicado ao universo de Naruto!</p></b> <p>Aqui somos apaixonados por tudo que envolve a jornada de Naruto Uzumaki, desde seus primeiros passos em Konoha até suas aventuras épicas como Hokage. Nosso objetivo é criar um espaço onde fãs possam se conectar, compartilhar suas teorias, discutir episódios e explorar os detalhes que tornam essa série tão especial.</p> 
            <b><p>Desenvolvedor:</b>
            <br>
            Enzo Bergamasco 
            <br>
            <b>Funções e Estruturas Utilizadas:</b>
            <br><br>
            A função session_start() é iniciada na index do projeto, porem não necessita do login do usuário para funcionar, pois o login não é uma função obrigatória para o funcionamento do site, sendo necessário apenas para utilizar a função de comentario.
            <br><br>
            $_SESSION['user_id'] foi utilizado para armazenar o identificador único do usuário após o login, permitindo que o sistema reconheça o usuário ao navegar por diferentes páginas sem exigir novo login.
            <br><br>
            Página de Login (login.php): Aqui, o usuário insere seu nome de usuário e senha. Se as credenciais forem corretas, uma sessão é criada e o usuário é redirecionado para a página de compra.
            <br><br>
            Pagina de Cadastro (cadastro.php): Nessa pagina o usuário poderá criar um conta na plataforma, inserindo um nome e senha. Após a criação da conta o usuário é redirecionado para a pagina de login.  
            <br><br>
            Logout (logout.php): Uma página de logout foi criada para encerrar a sessão quando o usuário decide sair, garantindo a segurança de que nenhuma informação sensível permanece acessível após o encerramento.</p>
        
            <b><p>Até a próxima missão, dattebayo!</p></b>
            </fieldset>
        </div>

        <div class="anchors">
        <h2>Comunidade</h2>
        
        <form action="processar_comentario.php" method="POST">
            <label for="comentario">Deixe seu comentário:</label>
            <textarea name="comentario" style="resize: none;" id="comentario" required></textarea>
            <button type="submit">Enviar</button>
        </form>

        <?php
        $arquivo = 'comentarios.json';
        if (file_exists($arquivo)) {
            $comentarios = json_decode(file_get_contents($arquivo), true);

            if (!empty($comentarios)) {
                foreach ($comentarios as $comentario) {
                    echo "<div class='comentario'>";
                    echo "<p><strong>" . htmlspecialchars($comentario['usuario']) . "</strong> comentou em " . $comentario['data'] . ":</p>";
                    echo "<p>" . htmlspecialchars($comentario['comentario']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Seja o primeiro a comentar!</p>";
            }
        } else {
            echo "<p>Seja o primeiro a comentar!</p>";
        }
        ?>

    </div>

        
    </div>
    <div class="footer">
        <footer>
            <div class="footer-content">
            <h2><a href="about.php">Sobre Nós</a></h2>
            <p>Este site é dedicado aos fãs de Naruto, trazendo informações, análises e discussões sobre a série.</p>
                
                <p>&copy; 2024 Todos os direitos reservados.</p>
            </div>
        </footer>
        
    </div>
</body>
</html>