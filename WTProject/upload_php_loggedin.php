<?php 
	session_start();
	?>
<?php

$conn = mysqli_connect('localhost','root','',"myAwards");
if(!$conn){
   die('Could not Connect My Sql:');
}
else
{
	 $vehiclenum = $_POST['vehiclenum'];
	 $place = $_POST['place'];
	 $date = $_POST['date'];
	 $file = $_POST['file'];
	 $vio = $_POST['vio'];
	 if($_SESSION["user"])
		 $user = $_SESSION["user"];
	else
		$user = "";
	if($vio == "noparking")
		$points = 20;
	else if($vio == "tripleriding")
		$points = 20;
	else if($vio == "usingmobilephone")
		$points = 15;
	else if($vio == "wrongparking")
		$points = 15;
	else if($vio == "ridingwithouthelmet")
		$points = 25;
	else if($vio == "parkingonfootpath")
		$points = 5;

	 $sql = "INSERT INTO myAwards (vehiclenum,place,dated,file,offense,user,points_gained) VALUES ('$vehiclenum','$place','$date','$file','$vio','$user','$points')";
	 if (mysqli_query($conn, $sql)) {
			header("Location: upload_loggedinsuc.html");
			$_SESSION["uploaded"] = "true";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
