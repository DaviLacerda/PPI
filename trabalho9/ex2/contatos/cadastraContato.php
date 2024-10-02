<?php

require "contatos.php";

$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$cpf = $_POST["cpf"] ?? ""; 
$senha = $_POST["senha"] ?? ""; 
$cep = $_POST["cep"] ?? ""; 
$endereco = $_POST["endereco"] ?? ""; 
$bairro = $_POST["bairro"] ?? ""; 
$cidade = $_POST["cidade"] ?? ""; 
$estado = $_POST["estado"] ?? ""; 

$novoContato = new Contato($nome, $email, $cpf, $senha, $cep, $endereco, $bairro, $cidade, $estado);
$novoContato->SalvaEmArquivo();

header("location: listaContatos.php");

?>