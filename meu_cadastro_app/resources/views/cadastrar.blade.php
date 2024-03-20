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



<div class="container mt-5">
    <h2>Formulário</h2>
    <form>
      <div class="form-group col-md-6">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" size="20" id="nome">
      </div>

      <br>

      <div class="form-group col-md-6">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" size="20" id="endereco">
      </div>
      
      <br>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" size="20" id="bairro">
        </div>
        
      <br>

        <div class="form-group col-md-6">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" size="20" id="cep">
        </div>
      </div>
      
      <br>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" size="20" id="cidade">
        </div>
        
      <br>

        <div class="form-group col-md-6">
          <label for="estado">Estado:</label>
          <select id="estado" class="form-control">
            <option selected>Escolha...</option>
            <option>AC</option>
            <option>AL</option>
            <option>AP</option>
            <option>AM</option>
            <option>BA</option>
            <option>CE</option>
            <option>DF</option>
            <option>ES</option>
            <option>GO</option>
            <option>MA</option>
            <option>MT</option>
            <option>MS</option>
            <option>MG</option>
            <option>PA</option>
            <option>PB</option>
            <option>PR</option>
            <option>PE</option>
            <option>PI</option>
            <option>RJ</option>
            <option>RN</option>
            <option>RS</option>
            <option>RO</option>
            <option>RR</option>
            <option>SC</option>
            <option>SP</option>
            <option>SE</option>
            <option>TO</option>
          </select>
        </div>
        <br>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

</center>


  </body>

</html>
