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
           
            <h1 id="producao">Produção</h1>
            <fieldset>
                <figure>
                    <img src="assets/images/kishimoto.webp" height="400" >
                </figure>
                <p>O autor da série, Masashi Kishimoto, primeiro autorizou o one-shot de Naruto em agosto de 1997 na revista Akamaru Jump. O Naruto original tinha uma temática significativa de amizade e confiança. No início da história, nem Naruto e nem Kuroda confiavam em ninguém, mas no final os dois se tornam amigos e passam a confiar um no outro. Apesar dos bons resultados na pesquisa com leitores depois do lançamento, Kishimoto pensou: "a arte está ruim e a história uma bagunça!". Kishimoto também revelou que ele estava originalmente trabalhando no mangá Karakuri para o Hop Step Award quando, insatisfeito com as mudanças da história, decidiu trabalhar em algo diferente, o que o levou a criar Naruto. Quando estava criando a história de Naruto, Kishimoto olhou para outros mangás do estilo shonen para influenciar seu trabalho, apesar dele tentar tornar seus personagens únicos o máximo possível. A separação dos personagens em diferentes times teve a intenção de dar a cada grupo um sabor especial. Kishimoto queria que cada membro fosse "extremo", tendo uma grande quantidade de aptidão em um atributo, mas não tendo talento em outro. A inserção dos vilões na história foi principalmente para agir como contrapartes para os valores morais dos personagens. Kishimoto admitiu que esse foco em ilustrar as diferenças de valores nos vilões foi tão importante na hora da criação dos vilões que "eu não pensei realmente como eles seriam em combate". Quando desenhava os personagens, Kishimoto seguiu um processo de cinco partes que ele seguia continuamente: "concept and rough sketch, drafting, inking, shading, and coloring". Esses passos foram usados quando ele desenhou o mangá atual e fez as ilustrações coloridas dos tankobon, as capas da Weekly Shonen Jump e outras mídias, mas as ferramentas que ele usava mudavam ocasionalmente. Por exemplo, ele usou um "airbrush" em uma ilustração para uma capa da Weekly Shonen Jump, mas decidiu não usar mais para desenhos futuros por causa da grande quantidade de correções que eram necessárias.
                Kishimoto também falou que precisa definir algumas regras para criar a história mais facilmente. Kishimoto queria representar a tradição do zodíaco chinês, que tem uma grande presença no Japão, criando os símbolos com as mãos usados para fazer os jutsus. Quando Kishimoto estava criando o cenário da série, ele inicialmente se concentrou em fazer o design da Vila da Folha, o ambiente inicial da série.
                Kishimoto falou que o design da Vila da Folha foi criado "bem espontaneamente sem muitas reflexões", apesar de admitir que o cenário é baseado na sua casa na Prefeitura de Okayama, no Japão. Sem ter um período de tempo específico, Kishimoto incluiu elementos modernos na série como lhe convinha, mas especificamente excluindo as armas projetéis e os veículos. Para o material de referência, Kishimoto fez sua própria pesquisa na cultura japonesa e as incluiu em seu trabalho. Quanto à tecnologia, Kishimoto falou que Naruto não teria armas de fogo. Ele disse que talvez incluísse automóveis, aviões e computadores com pouco poder de processamento. Ele ainda confirmou em uma outra entrevista que pensa no último capítulo da série dando um grande desfecho para a trama.</p>
            
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