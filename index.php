<?php 
    include './assets/src/application.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Store</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/main.css"/>
   </head>
   <body>
       <div class="topnav">
            <ul>
              <?php SecondMenu();?>
            </ul>
       </div>
       <div class="logo_backgroun">
           <div class="logo_view">
              <?php  slogan(); ?>
           </div>
       </div>
       <div class="topnav">
            <ul>
              <?php MainMenu();?>
            </ul>
       </div>
       <?php if(!isUserLogedIn()): ?>
       <div class="form_layout">
           <div class="login_title"><u>Login</u></div>
       <form method="POST">
           <label><b>Username</b></label>
           <br>
           <input type="text" name="username" placeholder="Username">
           <br>
           <label><b>Password</b></label>
           <br>
           <input type="text" name="password" placeholder="Password">
           <input type="submit" value="Давай напред!">
       </form>
       </div>
       <?php endif; ?>
       
   </body>
</html>
