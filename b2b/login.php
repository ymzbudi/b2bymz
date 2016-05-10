<?php 

// Jika user sudah login
// alihkan dari halaman ini 

if($user_sedang_login) {
  alihkan_halaman("index.php?p=home"); 
} 

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>LOGIN B2B</title>
    
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login-page">
  <div class="form" >
      <form class="login-form" name="form1" method="post" action="proses_login.php">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="submit" value="Login">login</button>
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>