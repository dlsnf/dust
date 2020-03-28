<?php

include "dbcon.php";


$get_ip = $_SERVER['REMOTE_ADDR'];

$stamp = mktime();
$get_date = date('Y-m-d H:i:s', $stamp);

$get_card_name = $_POST['card_name'];
$get_sex = $_POST['sex'];







$query = "SELECT * FROM graph WHERE card_name = '".$get_card_name."'"; // SQL 쿼리문



$result = mysqli_query($conn, $query);

mysqli_close($conn);



if( !$result ) {
	echo "Failed to list query graph_select_ajax.php";
	$isSuccess = FALSE;
}else{
	
}

$boardList = array();


while( $row = mysqli_fetch_array($result) ) {

	$board['seq'] = $row['seq'];
	$board['card_name'] = $row['card_name'];
	$board['sex'] = $row['sex'];
	$board['age'] = $row['age'];
	$board['file_name'] = $row['file_name'];

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