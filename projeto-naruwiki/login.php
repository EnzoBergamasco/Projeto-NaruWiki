<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $arquivo = 'usuarios.json';
    $usuarios = json_decode(file_get_contents($arquivo), true);

    foreach ($usuarios as $u) {
        if ($u['usuario'] === $usuario && password_verify($senha, $u['senha'])) {
            $_SESSION['usuario'] = $usuario; 
            header("Location: index.php"); 
            exit;
        }
    }

    $mensagem = "Usuário ou senha incorretos!";
}
?>

<html>
    <head>
        <title>Login</title>
        <style>
           body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-image: url('assets/images/background.jpg');
                background-size: cover;
                background-position: center;
                background-color: #f3c47f;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .logologin h1 {
                font-size: 1.8em;
                color: #fff;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                margin-bottom: 20px;
                font-weight: 600;
                text-align: center; /* Centraliza o texto */
            }

            fieldset {
                border: 2px solid rgba(255, 255, 255, 0.3);
                padding: 25px;
                border-radius: 12px;
                background: rgba(255, 255, 255, 0.1);
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(10px);
                width: 300px;
                margin: 0 auto;
            }

            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            form label {
                color: #f3f3f3;
                font-weight: 500;
                font-size: 0.9em;
            }

            form input {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                margin-bottom: 15px;
                border: 1px solid rgba(255, 255, 255, 0.3);
                border-radius: 5px;
                background-color: rgba(255, 255, 255, 0.2);
                color: #fff;
                font-size: 0.9em;
            }

            form input::placeholder {
                color: #ccc;
            }

            form input:focus {
                outline: none;
                border: 1px solid #4CAF50;
                background-color: rgba(255, 255, 255, 0.3);
            }

            form button {
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                border: none;
                border-radius: 5px;
                background-color: #fff; /* Botão branco */
                color: #4CAF50; /* Texto do botão em verde */
                font-weight: bold;
                font-size: 0.9em;
                cursor: pointer;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            form button:hover {
                background-color: #4CAF50;
                color: #fff;
            }

            form a {
                color: #4CAF50;
                text-decoration: none;
                font-size: 0.85em;
                transition: color 0.3s ease;
            }

            form a:hover {
                color: #fff;
            }
            .smaller-button {
            width: 25%; 
            padding: 5px;
            margin-top: 10px;
            }
            .error-message {
            color: red; 
            margin-top: 10px; 
            text-align: center; 
            width: 100%; 
            }

        </style>
    </head>
    <body>
        <div>
            <div class="logologin">
                <h1>FAÇA SEU LOGIN</h1>
            </div>
            <fieldset>
                <form action="login.php" method="POST">
                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario" required>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required>
                    <button type="submit">Entrar</button>
                    <button type="submit" class="smaller-button"><a href="cadastro.php">Cadastro</a></button>
                </form>
                <?php if (!empty($mensagem)): ?> 
                <div class="error-message"><?php echo $mensagem; ?></div> 
            <?php endif; ?>
            </fieldset>
        </div>
    </body>
</html>
