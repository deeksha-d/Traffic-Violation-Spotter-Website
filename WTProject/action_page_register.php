<?php
   $fname = $lname = "";
   //$fnameEr = $lnameEr = "";
   $email = $emailEr = "";
   $unameEr = $pswEr = "";
   $uname = "";
   $psw = "";
   $dbname = "registration data";
   $servername = "localhost";

   $conn = new mysqli($servername, "root", "", $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   $count = 0;

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
       $uname = $_POST["uname"];
       $psw = $_POST["psw"];
       $fname = test_input($_POST["fname"]);
       $lname = test_input($_POST["lname"]);
       $email = $_POST["email"];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL))
       {
           $emailEr = "Invalid email format <br>";
           if(!preg_match("/^[a-zA-Z0-9]*$/",$uname))
           {
               $unameEr = "Username not valid <br>";
           }
       }
       else if(!preg_match("/^[a-zA-Z0-9]*$/",$uname))
       {
           $unameEr = "Username not valid <br>";
       }
       else
       {
           $uname = test_input($_POST["uname"]);
           $sql_verify = "SELECT Username FROM `main data`";
           //$querySelectResult = mysqli_query($sql_verify,$conn);
           $uname_verify = $conn->query($sql_verify);
           while($row = mysqli_fetch_row($uname_verify))
           {
               if($row[0] == $uname)
                $count = 1;
           }
           $sql = "INSERT INTO `main data` (`Fname`,`Lname`,`Email`,`Username`, `Password`) VALUES('$fname','$lname','$email','$uname','$psw')";

           if($count != 1)
           {
               if ($conn->query($sql) === TRUE)
               {
                   header("Location: login.php");
               }
               else
               {
                   echo $sql;
               }
           }
           else {
               $unameEr = "<p style = 'color:red; display:inline;'>Username already exists!<br></p>";
           }
       }
    }

   function test_input($data)
   {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

?>
