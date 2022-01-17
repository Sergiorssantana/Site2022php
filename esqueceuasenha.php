<?php

include("conexao.php");

if(isset($_POST['ok'])){

    $email = $mysqli -> escape_string($_POST['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error[] = "Email inválido";
    }

      
        $sql_code = "select  senha, codigo FROM  cadastro WHERE email = '$email'";
        $sql_query =  $mysqli ->query($sql_code) or die($mysqli_error);
        $dado= $sql_query-> fetch_assoc();
        $total=$sql_query->num_rows;

        if($total == 0)
        $error[] = " O email informado não existe no banco de dados";
        if(count($error)== 0 && $total > 0){

        $novasenha = substr(md5(time()), 0, 6);
        $sncriptografada = md5(md5($novasenha));
 

 if(mail($email, "Sua nova senha", "Sua nova Senha: ".$novasenha)){


        $sql_code = "UPDATE cadastro  SET  senha = ' $sncriptografada' WHERE  email = '$email'";
        $sql_query = $mysqli -> query($sql_code) or die($mysqli -> error);

       if($sql_query)
        $error[] = "Senha alterada com sucesso!";
   }
 
}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esqueceu sua senha</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
 <header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/logo3 2.png" alt="Semed"> 
        </a>
</header>
                    <?php if( isset($error) && count($error) > 0){
					foreach($error as $msg){
						echo "<p> $msg </p>";
					}}
					?>
              <br><br><br><br><br><br>    
    <div>
    <form action="logout.php" method="post">
        <p><h1>Cadastre sua nova senha</h1></p>
        <hr>
        <p><label for="name">Nome:</label>
        <input type="text" id="name" /></p>
        <p><label for="senha">Senha:</label>
        <input type="password" id="Senha" /></p>
        <p><label for="mail">E-mail:</label>
        <input type="email" id="mail" /></p>
    </div>
    <div class="button" >
    <p><input type="submit" class="btn-outline-secondary" value="Enviar"></p>
    </div>
</body>
</html>