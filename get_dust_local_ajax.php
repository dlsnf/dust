<?php

include "dbcon.php";


$get_ip = $_SERVER['REMOTE_ADDR'];

$stamp = mktime();
$get_date = date('Y-m-d H:i:s', $stamp);

//$get_card_name = $_POST['card_name'];







//10초 이내 측정된것
$query = "SELECT * FROM dust_local WHERE date_ > DATE_ADD(now(), INTERVAL -10 second) ORDER BY date_ DESC LIMIT 0 , 1"; // SQL 쿼리문



$result = mysqli_query($conn, $query);

mysqli_close($conn);



if( !$result ) {
	echo "Failed to list query get_dust_local_ajax.php";
	$isSuccess = FALSE;
}else{
	
}

$boardList = array();


while( $row = mysqli_fetch_array($result) ) {

	$board['seq'] = $row['seq'];
	$board['dust_val'] = $row['dust_val'];
	$board['date_'] = $row['date_'];

	array_push($boardList, $board);
}



if($result) {
	echo json_encode($boardList);
} else {
	echo "\n처리하지 못했습니다.";
}








//특수문자 제거함수
function content($text){
 $text = strip_tags($text);
 $text = htmlspecialchars($text);
 $text = preg_replace ("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $text);
 return $text;
}


?>