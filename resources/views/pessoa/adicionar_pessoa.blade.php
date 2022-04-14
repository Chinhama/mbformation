<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Entendo a estrutura e semântica do HTML5</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>
   <body>


   <div class="container">

      <div class="mt-4 p-5 bg-dark text-white rounded text-center">
       <h1>Tela para Adicionar Pessoas</h1>
      </div>   
    
<button type="button" class="btn btn-dark" style="margin-top:1%;">Voltar</button>

<form action="{{route('cadpessoa')}}" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="mb-3">
    <label  class="form-label">Nome Completo</label>
    <input type="name" class="form-control" name="nome">

  </div>
  <div class="mb-3">
    <label  class="form-label">Sobre Nome</label>
    <input type="name" class="form-control" name="sobre_nome" >

  </div>
  <div class="mb-3">
    <label  class="form-label">Foto</label>
    <input type="file" class="form-control" name="foto" >

  </div>
<div class="mb-3">
<input type="radio" id="html" name="sex" value="Masculino">
<label for="html">Masculino</label><br>
<input type="radio" id="css" name="sex" value="Feminino">
<label for="css">Feminino</label><br>
</div>

  <div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="number" class="form-control" name="age" >
  </div>

  <div class="mb-3">
    <label for="idade" class="form-label">Altura</label>
    <input type="number" class="form-control" name="alt" >
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

   </div>



       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>