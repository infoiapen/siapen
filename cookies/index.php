<?php

$email = (isset($_COOKIE['CookieEmail'])) ? base64_decode($_COOKIE['CookieEmail']) : '';
$senha = (isset($_COOKIE['CookieSenha'])) ? base64_decode($_COOKIE['CookieSenha']) : '';
$lembrete = (isset($_COOKIE['CookieLembrete'])) ? base64_decode($_COOKIE['CookieLembrete']) : '';
$checked = ($lembrete == 'SIM') ? 'checked' : '';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login com Cookie</title>
  <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
  <style type="text/css">
  fieldset{
    width: 300px;
    height: 250px;
    margin:10% auto;
  }
  </style>
</head>
<body>
  <fieldset>
    <legend><h1>Login</h1></legend>
    <form method="post" action="login.php">
      <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" value="<?=$email?>" id="email" name="email" placeholder="Infome o E-mail">
      </div>
      <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" value="<?=$senha?>" id="senha" name="senha" placeholder="Infome a Senha">
      </div>
      <div class="checkbox">
          <label>
            <input type="checkbox" name="lembrete" value="SIM" <?=$checked?>> Lembre-me
          </label>
      </div>
         <button type="submit" class="btn btn-primary" id='botao'> 
         Entrar
         </button>  
    </form>
  </fieldset>
</body>
</html>