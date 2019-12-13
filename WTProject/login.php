<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="stylelogin.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php include "action_page_login.php" ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div class="imgcontainer">
            <img src="curr.png" alt="Avatar" class="avatar">
          </div>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" value = "<?php echo $uname; ?>" required>
            <span class = "Error"><?php echo $unameEr; ?></span>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" value = "<?php echo $psw; ?>" required>
            <span class = "Error"><?php echo $pswEr ?></span>

            <button type="submit">Login</button>

          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button class="cancelbtn"><a href="home.php" style="color:white; text-decoration:none;">Home</a></button>
            <span class="psw">New User? <a href="register.php">Register here</a></span>
          </div>
        </form>
    </body>
</html>
