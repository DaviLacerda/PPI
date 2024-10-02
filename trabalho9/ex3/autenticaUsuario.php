<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);

    foreach ($usuarios as $usuario) {
        list($usuarioEmail, $hash) = explode(':', $usuario);
        if ($usuarioEmail === $email && password_verify($senha, $hash)) {
            header("Location: sucesso.html");
            exit();
        }
    }
    header("Location: login.html");
}
?>