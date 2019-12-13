<?php
    session_start();
    ?>
<?php
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
       $psw = $_POST["psw"];
       $uname = $_POST["uname"];
        if(!preg_match("/^[a-zA-Z0-9]*$/",$uname))
       {
           $unameEr = "Username not valid <br>";
       }
       else
       {
           $uname = test_input($_POST["uname"]);
           $sql_verify = "SELECT Username,Password,Fname FROM `main data`";
           //$querySelectResult = mysqli_query($sql_verify,$conn);
           $uname_verify = $conn->query($sql_verify);
           while($row = mysqli_fetch_row($uname_verify))
           {
               if($row[0] == $uname && $row[1] == $psw){
                    echo "Login successful";
                    $fname = $row[2];
                    $_SESSION["user"] = $uname;
                    $_SESSION["fname"] = $fname;
                    if(isset($_SESSION["user"]))
                        echo "set";
                    $pswEr = "";
                    header("Location: loggedin.html");
               break;
               }
                else
                    $pswEr =  "<p style = 'color:red; display:inline;'>Invalid Username or Password!<br><br></p>";
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
