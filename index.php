<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="styling/style2.css">
  </head>
  <body>
    <div class="center">
      <form action="login.php" method="post">
      <h1>Login</h1>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="txt_field">
          <input type="text" name="uname" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <br>
        <!-- <input type="submit" value="Login"><br> -->
        <button><a href="home.php">masuk</a></button>
        <br>
      </form>
    </div>

  </body>
</html>