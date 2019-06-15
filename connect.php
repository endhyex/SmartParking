<?php

	function Connection(){
		$server="localhost";
		$user="root";
		$pass="";
		$db="proyek_manpro";

        error_reporting(E_ALL ^ E_DEPRECATED);
        $connection = mysqli_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}

		mysqli_select_db( $connection,$db) or die( 'MySQL ERROR: '. mysql_error() );


		return $connection;
	}
?>
