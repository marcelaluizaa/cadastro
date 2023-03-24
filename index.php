<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<?php 
  include("menu.html")
?>
<br>
<br>
<br>
    <h1>Página form.php</h1>
    <div class="container">
    <h3>tela de login </h3>
    <div>
        <form action="cadastro.php" method="get">
                <label>login:</login>
                <input type="text" name="login"/><br/><br/>
                <label>Email:</login>
                <input type="text" name="email"/><br/><br/>
                <label>telefone:</login>
                <input type="text" name="telefone"/><br/><br/>
                <label>Endereço:</login>
                <input type="text" name="endereco"/><br/><br/>
                <label>Cidade:</login>
                <input type="text" name="cidade"/><br/><br/>
                <label>País:</login>
                <input type="text" name="pais"/><br/><br/>
                <input type="submit"  class="btn btn-dark"  value="entrar"/> 
                 <input type="reset" class="btn btn-dark" value="limpar"/>
    </form> 
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>