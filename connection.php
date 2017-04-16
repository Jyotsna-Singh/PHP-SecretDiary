<?php

$link = mysqli_connect("localhost", "admin", "secret", "diary");
		
		
		if (mysqli_connect_error()){
			
			die ("Database Connection Error");
		}

?>
