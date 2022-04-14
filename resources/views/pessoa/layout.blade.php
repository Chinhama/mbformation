<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Entendo a estrutura e semântica do HTML5</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

   </head>
   <body>


   <div class="container">

      <div class="mt-4 p-5 bg-dark text-white rounded text-center">
       <h1>Tela de Listagem de Pessoas</h1>
      </div>   
    
<button type="button" class="btn btn-dark" style="margin-top:1%;">Adicionar Pessoa</button>

<table class="table">
  <thead>
   

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Idade</th>
      <th scope="col">Altura</th>
      <th scope="col">Opções</th>

    </tr>
        
  
    
  </thead>
  <tbody>

    @foreach ($user as $use )
    <tr>
      <th scope="row">{{$use->id}}</th>
      <td>{{$use->nome}}</td>
      <td>{{$use->nome}}</td>
      <td>33 Anos</td>
      <td>1.88</td>
      <td>
      <a href="#"><i class="bi bi-pencil-square" style="font-size:1.2em;" data-bs-toggle="tooltip" data-bs-placement="top" title="Clique para Actualizar"></i></a>
      <form action="{{route('delpessoa',['id'=>$use->id])}}" method="post" >

        @csrf
        @method('delete')
      <input type="hidden" name="id" value="1">
      <button type="submit"><i class="bi bi-x-square" style="color:red; font-size:1.2em;" data-bs-toggle="tooltip" data-bs-placement="top" title="Clique para Apagar"></i>  </button>
     </form>
    </td>

    </tr>
    @endforeach
   
  </tbody>
</table>

   </div>

 


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <!--tolpit-->
<script>

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

</script>

      </body>
</html>