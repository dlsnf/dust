<?php

include "dbcon.php";


$get_ip = $_SERVER['REMOTE_ADDR'];

$stamp = mktime();
$get_date = date('Y-m-d H:i:s', $stamp);



$get_yaer = date('Y', $stamp);
$get_month = date('m', $stamp);
$get_day = date('d', $stamp);



$get_hour = date('H', $stamp);
$get_minute = date('i', $stamp);
$get_second = date('s', $stamp);


$week_w = array('일','월','화','수','목','금','토');
$week_N = array('','월','화','수','목','금','토','일');
 
   /*
    echo "date(\"w\") : ".$week_w[date("w")]."<Br>";
    echo "date(\"N\") : ".$week_N[date("N")]."<Br>";
*/

$get_dayday = $week_w[date("w")];




$boardList = array();
$board['seq'] = 1;

$board['get_yaer'] = $get_yaer;
$board['get_month'] = $get_month;
$board['get_day'] = $get_day;

$board['get_dayday'] = $get_dayday;

$board['get_hour'] = $get_hour;
$board['get_minute'] = $get_minute;
$board['get_second'] = $get_second;


array_push($boardList, $board);



//반환값 보내주기
if($board['seq']) {

	echo json_encode($boardList);
} else {
	$boardList1 = array();
	$board1['seq'] = -1;
	array_push($boardList1, $board1);
	echo json_encode($boardList1);
}





?>