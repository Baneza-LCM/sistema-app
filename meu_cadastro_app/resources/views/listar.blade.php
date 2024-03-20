<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agendamento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>


  <body>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- código do navbar -->
<center>
    <nav class="navbar navbar-expand-lg   bg-primary" data-bs-theme="dark"> 
  <div class="container-fluid">
 
    <a class="navbar-brand" href="#">Sistema WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="cadastrar.blade.php">Cadastrar</a>
        <a class="nav-link" aria-current="page" href="listar.blade.php">Consultar</a>
      </div>
    </div>
 
  </div>
</nav>
<!-- fim do código do navbar -->
<br>

 <h2> Cadastrar - Agendamento de Potenciais Clientes </h2>
 
 <h4> Sistema utilizado para agendamentos de serviços </h4>

<br><br>




<div class="table-responsive-lg">
<table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
    <tr>
      <td>Anna Araujo Fernandes </td>
      <td>Vila Santana, 1811 </td>
      <td>João Pessoa </td>
    </tr>

    <tr>
      <td>Ryan Santos Souza </td>
      <td>Caminho dos Cachorros, 1526 </td>
      <td>Vitória da Conquista </td>
    </tr>

    <tr>
      <td>Carla Silva Correia </td>
      <td>Beco da Paz, 943 </td>
      <td>Blursa </td>
    </tr>
  </tbody>

</table>
</div>

<br>


<div class="table-responsive-lg">
<table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">CEP</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

  <tbody class="table-group-divider">
    <tr>
      <td>58030-059 </td>
      <td>Vinas </td>
      <td>PR </td>
      <td>Novo cliente </td>
    </tr>

    <tr>
      <td>45030-080 </td>
      <td>Cresdence </td>
      <td>BA </td>
      <td>Novo cliente </td>
    </tr>

    <tr>
      <td>21512-300 </td>
      <td>Plonio </td>
      <td>RJ </td>
      <td>Inserir CPF </td>
    </tr>
  </tbody>

</table>
</div>

</center>

  </body>

</html>
