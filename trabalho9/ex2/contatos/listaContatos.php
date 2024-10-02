<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- 1: Tag de responsividade -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página Dinâmica - Listagem de Contatos - Segura</title>

  <!-- 2: Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <div class="container">

    <h3>Contatos Carregados do Arquivo <i>contatos.txt</i></h3>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>CPF</th> 
          <th>Senha</th> 
          <th>CEP</th> 
          <th>Endereço</th> 
          <th>Bairro</th> 
          <th>Cidade</th> 
          <th>Estado</th> 
        </tr>
      </thead>

      <tbody>
        <?php
        require "contatos.php";
        $arrayContatos = carregaContatosDeArquivo();
        foreach ($arrayContatos as $contato) {
          $nome = htmlspecialchars($contato->nome);
          $email = htmlspecialchars($contato->email);
          $cpf = htmlspecialchars($contato->cpf); // Adicionado
          $senha = htmlspecialchars($contato->senha); // Adicionado
          $cep = htmlspecialchars($contato->cep); // Adicionado
          $endereco = htmlspecialchars($contato->endereco); // Adicionado
          $bairro = htmlspecialchars($contato->bairro); // Adicionado
          $cidade = htmlspecialchars($contato->cidade); // Adicionado
          $estado = htmlspecialchars($contato->estado); // Adicionado
          echo <<<HTML
            <tr>
              <td>$nome</td>
              <td>$email</td>
              <td>$cpf</td> 
              <td>$senha</td> 
              <td>$cep</td> 
              <td>$endereco</td> 
              <td>$bairro</td> 
              <td>$cidade</td> 
              <td>$estado</td> 
            </tr>
          HTML;
        }
        ?>
      </tbody>
    </table>
    <a href="index.html">Voltar à página inicial</a>
  </div>

</body>

</html>