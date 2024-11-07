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
