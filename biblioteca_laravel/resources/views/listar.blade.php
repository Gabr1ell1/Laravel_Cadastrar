<!DOCTYPE html> 
<html lang="pt"> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Listagem de Produtos</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body{font-family: Arial, Helvetica, sans-serif;}
    .listagem{margin-left: 20px;margin-right: 30px;}
    .text{margin-left: 20px;}
    .info{color: gray; font-size: small;}
    h1{font-size: medium; background-color: #DCDCDC;padding: 5px; border-radius: 5px;}
  </style>
</head> 
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dev. Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            CRUD
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="{{ route('cadastrar-produto')}}">Cadastrar</a></li>
            <li><a class="dropdown-item" href="{{ route('listar-produto')}}">Listar</a></li>
            <li><a class="dropdown-item" href="{{ route('editar-produto', ['id' => 1])}}">Atualizar</a></li>
<<<<<<< HEAD
            <li><a class="dropdown-item" href="{{ route('excluir-produto', ['id' => 1])}}">Deletar</a></li>
=======
            <li><a class="dropdown-item" href="#">Deletar</a></li>
>>>>>>> bd56a3d66b3890c91de36313bd54b175a25a34b0
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<div class="text">
  <h4>Lista de Novos Produtos!</h4>
  <p>Visualize aqui seus produtos.</p>
</div>
<div class="listagem">
  @csrf 
  @if(count($produto))
  @foreach ($produto as $Produto)
    <h1>Produto: {{ $Produto->nome }}</h1>
    <div class="form-floating">
      <input type="text" class="form-control" name="nome[]" value="{{ $Produto->nome }}"> 
      <label for="lblNome">Nome: </label>
    </div><br>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="valor[]" value="{{ $Produto->valor }}"> 
      <label for="lblValor">Valor: </label> 
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" name="quantidade[]" value="{{ $Produto->quantidade }}"> 
      <label for="lblQuantidade">Quantidade: </label> 
    </div>
    <br>
  @endforeach
  @else
   <p class="info">Nenhum produto cadastrado</p>
   @endif
</div>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body> 
</html>
