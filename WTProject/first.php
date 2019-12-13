<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-size:18px;
  overflow: hidden;
  background-color: #222229;
  color:white;
  position: sticky;
  top: 0;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 6px 8px;
  text-decoration: none;
}

li a:hover {
  background-color:grey;
}
.navbar{
height:12px;
border:1px;

}
            </style>
    <title>My Awards</title>
    <meta charset="utf-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>  -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

    </head>
    <div class="navbar">
<ul>
  <li><a href="loggedin.html">Home</a></li>
  <li><a href="faq_loggedin.html">FAQs</a></li>
  <li><a href="">My Awards</a></li>
  <li><a href="instructionsloggedin">Instructions</a></li>
  <li><a href="upload_loggedin.html">Upload Photo</a><li>
</ul>
</div>


    <body style = "margin-top:3%;">
   
    <div class="container">
    <h2>My Awards</h2>
    <br>
    Welcome <?php echo $_SESSION["fname"]?>!
    <br>
    <br>
    <table class="table table-hover">
    <thead>
    <tr>
        <th>Complaint Id</th>
        <th>Date</th>
        <th>Offence</th>
        <th>Points Earned</th>

    </tr>
    </thead>
    <tbody>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myAwards";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully"."<br>";

$a = $_SESSION["user"];
$sql = "SELECT * FROM myAwards";
$result = $conn->query($sql);

// if ($result->num_rows > 0)
// {
//     while($row = $result->fetch_assoc())
//     {
//         echo "id : ". $row["complaint_id"]."    ".  "offense :" .$row["offense"]."   ". "point". $row["points_gained"]."    ". "date:". $row["dated"]."<br>" ;
//     } 


while($row = mysqli_fetch_row($result))
{

if($row[4] == $a)
{
    echo "<tr class=\"info\">";
    // foreach($result->fetch_assoc() as $x => $x_value) {
       
    //     echo "<td>";
    //     echo "$x_value";
    //     echo "</td>";
    // }
    echo "<td>";
    echo $row[0];
    echo "</td>";
    echo "<td>";
    echo $row[1];
    echo "</td>";
    echo "<td>";
    echo $row[2];
    echo "</td>";
    echo "<td>";
    echo $row[3];
    echo "</td>";
    // echo "<td>";
    // echo $row[4];
    // echo "</td>";
 

    echo "</tr>";
}
}
echo "</tbody>";
echo"</table>";
echo "</div>";

?>
</p>
<!-- 
<?php echo $_SESSION[user]; ?> -->

</body>
</html>

<!-- echo "$_SESSION['user']";
session_unset(); 
session_destroy();  -->