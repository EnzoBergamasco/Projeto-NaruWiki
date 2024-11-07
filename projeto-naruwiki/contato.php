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
    <h1>Contato</h1>
    <fieldset>
        <div class="container">
            <div class="img-kakashi">
                <img src="assets/images/kakashi telefone.jpg" height="250"> 
            </div>
            <form>
                <h3>Fale com a gente!</h3>
                <textarea id="textcntt" placeholder="Digite sua mensagem aqui"></textarea>
                <button onclick="enviar()" type="reset" id="subcntt">Enviar</button>
            </form>
            <div class="cnttele">
                <p>Tel: (11) 9999-9999</p>
                <p>E-mail: narutowiki@gmail.com</p>
                <p>Whatsapp: (11) 99999-9999</p>
                <p>Facebook: WikiNaruto</p>
                <p>Twitter(X): WikiNaruto</p>
                <p>Instagram: @WikiNaruto</p>
                <p>Telegram: (11) 99999-9999</p>
            </div>
        </div>
    </fieldset>

    <script>
        function enviar() {
            alert("Mensagem enviada com sucesso");
        }
    </script>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            padding: 20px;
        }
        
        .img-kakashi {
            margin-bottom: 20px;
        }
        
        #textcntt {
            width: 100%;
            max-width: 400px;
            height: 200px;
            margin-top: 10px;
            margin-bottom: 10px;
            resize: none;
        }
        
        #subcntt {
            width: 100px;
            height: 35px;
            text-align: center;
            cursor: pointer;
        }

        .cnttele {
            margin-top: 20px;
            text-align: center;
        }

        .cnttele p {
            margin: 5px 0;
        }
    </style>
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