<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
     <style>
      .form{
  margin-top: 100px;
  margin-left:150px;
  background-color:#Ccaf;
  width: 650px;
  height: 250px;
  border: 2px solid yellow;
  border-radius: 25px;
  
},

     </style>
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0 text-warning">livros</h3>
        </div>
      </header>

</div>





  <form action="{{route('cadastrar')}}" method="POST">
  
    @csrf 
  <div class="form">
  <h1>cadastro</h1>
      <input class="text" type="text" placeholder="livros" aria-label="default input example" name="nomeLivro">
  
      <input class="text" type="text" placeholder="autor" aria-label="default input example"name="autorLivro">

      <input class="text" type="text" placeholder="data" aria-label="default input example"name="dataLancamentoLivro">
  
      <br><br>
      <button type="submit" class="btn btn-dark">cadastrar</button>
  </div>
</form>
</body>
</html>


