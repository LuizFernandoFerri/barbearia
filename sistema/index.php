<?php
require_once("conexao.php");

$senha = '123';
$senha_crip = md5($senha);

$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);
if ($total_reg == 0) {
  $pdo->query("INSERT INTO usuarios SET nome = 'Luiz Ferreira' , email  = '$email_sistema', cpf ='000.000.000-00' , senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', data = curDate()");
}



?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $nome_sistema ?> </title>
  <link rel="stylesheet" href="css/estilo-login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/png" href="img/favicon.ico">
</head>



<body>
  <div class="wrapper">
    <form accept-charset="UTF-8" role="form" action="autenticar.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" name="email" placeholder="E-mail ou CPF" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="senha" placeholder="Senha" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <a href="#">Esqueceu a senha?</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Não tem uma conta?<a href="#">Registre-se</a></p>
      </div>
    </form>
  </div>
</body>

</html>