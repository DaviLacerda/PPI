<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    // Armazenar e-mail e hash da senha em usuarios.txt
    file_put_contents('usuarios.txt', "$email:$hash\n", FILE_APPEND);
    echo "Usuário cadastrado com sucesso!";
}
?>