<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="styleregister.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php include "action_page_register.php" ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div class="imgcontainer">
            <img src="curr copy.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for = "fname"><b>First Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Last Name</b></label><br>
            <input type = "text" id = "names" placeholder = "Enter First Name" name = "fname" value = "<?php echo $fname;?>" required>

            <label for = "lname"><b></b></label>
            <input type = "text" id = "names" placeholder = "Enter Last Name" name = "lname" value = "<?php echo $lname;?>" required>

            <label for = "email"><b>Email</b></label>
            <input type = "text" placeholder = "Enter Email" name = "email" value = "<?php echo $email;?>" required>
            <span class = "Error"><?php echo $emailEr; ?></span>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" value = "<?php echo $uname;?>" required>
            <span class = "Error"><?php echo $unameEr; ?></span>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" value = "<?php echo $psw;?>" required>
            <span class = "Error"><?php echo $pswEr ?></span>

            <button type="submit">Register</button>

          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button class="cancelbtn"><a href="login.php" style="color:white;text-decoration:none;">Back</a></button>
          </div>
        </form>
    </body>
</html>
