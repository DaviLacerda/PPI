<?php

class Contato
{
  public $nome;
  public $email;
  public $cpf; 
  public $senha; 
  public $cep; 
  public $endereco; 
  public $bairro; 
  public $cidade; 
  public $estado; 

  function __construct($nome, $email, $cpf, $senha, $cep, $endereco, $bairro, $cidade, $estado)
  {
    $this->nome = $nome;
    $this->email = $email;
    $this->cpf = $cpf; 
    $this->senha = $senha; 
    $this->cep = $cep; 
    $this->endereco = $endereco; 
    $this->bairro = $bairro; 
    $this->cidade = $cidade; 
    $this->estado = $estado; 
  }

  public function SalvaEmArquivo()
  {
    $arq = fopen("clientes.txt", "a");

    fwrite($arq, "\n{$this->nome};{$this->email};{$this->cpf};{$this->senha};{$this->cep};{$this->endereco};{$this->bairro};{$this->cidade};{$this->estado}");

    fclose($arq); 
  }
}

function carregaContatosDeArquivo()
{
  $arrayContatos = [];
  
  $arq = fopen("clientes.txt", "r");
  if ( !$arq )
    return $arrayContatos;

  while (!feof($arq)) {
    $contato = fgets($arq); 
    
    list($nome, $email, $cpf, $senha, $cep, $endereco, $bairro, $cidade, $estado) = array_pad(explode(';', $contato), 10, null);

    $novoContato = new Contato($nome, $email, $cpf, $senha, $cep, $endereco, $bairro, $cidade, $estado);
    $arrayContatos[] = $novoContato;
  }
      
  fclose($arq);  
  return $arrayContatos;
}

?>