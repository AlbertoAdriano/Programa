<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tecnologia Einstein</title>
      <link rel="stylesheet" href="formulario.css">
</head>

<body class="botao">
      <form action="serviços.php" method="POST">
            <div>
                  <h1>TELA DE CADASTRO</h1>

            </div>
            <div>
                  <label>Nome</label>
                  <input type="text" name="Nome">
            </div>
            <div>
                  <label>Email</label>
                  <input type="email" name="Email">

            </div>
            <div>
                  <label>Senha</label>
                  <input type="text" name="Senha">

            </div>
            <div>
                  <label>Género</label>
                  <select name="Género">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>

                  </select>
            </div>
            <div>
                  <input type="submit" value="Enviar dados">
            </div>

      </form>



</body>

</html>