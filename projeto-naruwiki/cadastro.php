<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

    $arquivo = 'usuarios.json';
    $usuarios = json_decode(file_get_contents($arquivo), true);

    foreach ($usuarios as $u) {
        if ($u['usuario'] === $usuario) {
            echo "Usuário já existe!";
            exit;
        }
    }

    $usuarios[] = ["usuario" => $usuario, "senha" => $senha];
    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    echo "Usuário cadastrado com sucesso!";
    header("Location: login.php");
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

        .logocadastro h1 {
            font-size: 1.8em;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center; 
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
            background-color: #fff; 
            color: #4CAF50; 
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
        </style>
    </head>
    <body>
        <div>
            <div class="logocadastro">
                <h1>FAÇA SEU CADASTRO</h1>
            </div>
            <fieldset>
    <form action="cadastro.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <button type="submit">Cadastrar</button>
    </form>
    </fieldset>
    </div>
    </body>
</html>
