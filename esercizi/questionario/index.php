<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form informazioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="./accesso_pagina_benvenuto.php">
        <label for="Nome">Inserire nome: </label>
        <input type="text" id="Nome" name="Nome"><br>
        <label for="Cognome">Inserire cognome: </label>
        <input type="text" id="Cognome" name="Cognome"><br>
        <label for="Età">Inserire età: </label>
        <input type="number" id="Età" name="Età"><br>
        <label for="Sport">Inserire sport preferito: </label>
        <input type="text" id="Sport" name="Sport"><br>
        <label for="Colore">Inserire colore interfaccia: </label>
        <input type="color" id="Colore" name="Colore"><br>
        <label for="Password">Inserire Password: </label>
        <input type="password" id="Password" name="Password"><br>
        <input type="submit">


    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>