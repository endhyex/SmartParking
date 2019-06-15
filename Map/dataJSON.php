<?php

	include("connect.php");

	$link=Connection();

	$result=mysqli_query($link,"SELECT * FROM parkirloc");

	while ($row = mysqli_fetch_array($result)) {
	$data[] = array(
	    'nama_parkiran' => $row['nama_parkiran'],
        'latitude' => $row['latitude'],
        'longitude' => $row['longitude'],
        'available' => $row['available'],
        );
	}
    echo json_encode($data);  

	mysqli_free_result($result);
	mysqli_close($link);

?>
