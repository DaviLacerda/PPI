<?php
$usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);
echo "<h1>Usuários Cadastrados</h1>";
foreach ($usuarios as $usuario) {
    list($email, $hash) = explode(':', $usuario);
    echo "E-mail: $email, Hash: $hash<br>";
}
?>