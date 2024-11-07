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
            
            <h1 id="personagens">Personagens</h1>
            <fieldset>
            <figure>
                    <img src="assets/images/naruto-team-7.jpg" height="300">
            </figure>
            <p>A grande maioria dos personagens introduzidos na série são ninjas provenientes das aldeias e facções que aparecem na história. Os protagonistas pertencem a Aldeia Oculta da Folha e o enredo é narrado em sua maioria em torno de suas aventuras.
            O personagem principal que dá nome a série é Naruto Uzumaki (うずまきナルト?), um jovem ninja que carrega em seu interior o demônio Kyūbi, e deseja ser o Hokage de sua aldeia, já que ninguém queria estar perto dele por causa da Kyūbi e para demonstrar seu verdadeiro poder, como igualmente sua valentia. Seus companheiros de grupo (no início da série) são Sasuke, Sakura e Kakashi (este último seu mestre sensei). Com o desenrolar da história, o grupo muda a partir do momento que Sasuke decide abandonar a aldeia para realizar sua vingança pessoal. Pouco depois, Naruto se converte em aprendiz de Jiraiya, um pervertido guerreiro.              
            Sasuke Uchiha (うちはサスケ?) é um membro da clã Uchiha. É um garoto sério, e possui uma grande habilidade para as artes ninjas estilo de fogo. Seu objetivo é ser suficientemente forte para derrotar seu irmão maior Itachi, que assassinou todos os demais membros do seu clã. Em seguida, abandonará a aldeia para treinar com Orochimaru, um ninja corrompido e sem piedade, que busca dominar todos os ninjutsus do mundo.          
            A única garota do grupo é Sakura Haruno (春野サクラ?), que inicialmente está apaixonada por Sasuke, tal como todas as suas companheiras da Academia Ninja e despreza Naruto. Ao avançar da história, Sakura começa a gostar da amizade de Naruto. Se torna aprendiz de Tsunade, com quem aprende técnicas medicinais ninjas.        
            Kakashi Hatake é o primeiro mestre da equipe de Naruto, Sasuke e Sakura. É um ninja experiente, severo a primeira vista e amante das novelas para adultos, e se preocupa muito com o trabalho em equipe. Possui um Kekkei Genkai, o Sharingan em seu olho esquerdo, o qual obteve por parte de um membro do clã Uchiha que era seu amigo (Obito Uchiha). Com este olho, Kakashi copiou muitas técnicas de outros ninjas, o que lhe rendeu o nome de “O Ninja que Copia”.           
            Os demais personagens principais se encontram nas outras equipes ninjas que compartilharam a classe com Naruto na Academia Ninja, junto com seus respectivos mestres. Destacam os times formados por Ino, Choji, Shikamaru e o sensei Asuma, o de Hinata, Kiba, Shino e o sensei Kurenai, e o time formado por Rock Lee, Tenten, Neji e o sensei Maito Gai.       
            Outros personagens importantes para a história são os “Três Ninjas Lendários” (Tsunade, Jiraiya e Orochimaru), além dos membros da Organização Akatsuki, formado por ninjas renegados de diversas procedências, cujo objetivo é capturar os demônios Bijuu por um motivo que será revelado conforme avança a história. Esta organização foi criada sob a influência de Obito Uchiha, que junto com Madara Uchiha e a Deusa Kaguya seriam os três antagonistas principais.
            </p>
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