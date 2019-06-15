<?php
   	include("connect.php");

   	$link=Connection();

    $nama_parkiran = $_GET["nama_parkiran"];

	  $query = "UPDATE `parkirloc` SET `available`= 1 WHERE `nama_parkiran`='".$nama_parkiran."'";

	  mysqli_query($link,$query);
		mysqli_close($link);
    header("Location: Mapku.php");
?>
