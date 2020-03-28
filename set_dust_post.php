<?php

	include "dbcon.php";


	
	$stamp = mktime();
	$get_date = date('Y-m-d H:i:s', $stamp);

	$get_dust_val = $_POST['dust'];



	if( $get_dust_val )
	{


		$query = "INSERT INTO dust_local(dust_val, date_) VALUES ('$get_dust_val', '$get_date')"; // SQL 쿼리문
		$result = mysqli_query($conn, $query);


		if ( $result )
		{
			echo 1;
		}else{
			echo 2;
		}
		

	}else{ //POST으로 들어온 값이 없을때

		echo 999;

	}
	

?>

		