<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY APP</title>
</head>
<body>
  <h1>BENVENUTO NELLA MIA NUOVA APP</h1>
  <h3>Questa è la home page</h3>

  <a href="{{ url('/works')}}">Pagina dei pezzi d'arte</a>
  <br>
  <a href="{{ url('/contacts')}}">Pagina dei contatti dell'artista</a>
  <br>
  <a href="{{ url('/portfolio')}}">Pagina con il portfolio</a>
</body>
</html>