<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <h1> Form molto semplice </h1>

    <form action="./action-register.php">
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname"><br>

      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname"><br>

      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>

      <label for="age">Age:</label><br>
      <input type="number" id="age" name="age"><br>

      <input type="submit" />

    </form>
  </div>

</body>

</html>