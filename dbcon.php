<?php

//header ("Content-Type : text/html; charset=utf-8");

// db 연결부분
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "hansbuild1!";
$mysql_db = "dust";

$isSuccess = TRUE;

//$encrypted = encrypt("value", "dlsnf");

//$mysql_password = decrypt($mysql_password, "dlsnf");


//$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db,3306); //3306:기본포트
if(mysqli_connect_errno($con))die("Connect failed :".mysqli_connect_error());

if( !$conn ) {
	echo "Failed to mysql_connect ";
	$isSuccess = FALSE;
}else{
	//echo "성공";
}


//이걸 꼭 넣어줘야 한글 인식됨!
mysqli_query($conn,"set names utf8");

mysql_set_charset($conn, 'utf8');



//mysqli_select_db($mysql_db, $conn);

mysqli_query("set session character_set_connection=utf8;");
mysqli_query("set session character_set_results=utf8;");
mysqli_query("set session character_set_client=utf8;");

/*

function encrypt($string, $key) {
  $result = '';
  for($i=0; $i<strlen($string); $i++) {
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)+ord($keychar));
    $result.=$char;
  }
  return base64_encode($result);
}
function decrypt($string, $key) {
  $result = '';
  $string = base64_decode($string);
  for($i=0; $i<strlen($string); $i++) {
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)-ord($keychar));
    $result.=$char;
  }
  return $result;
}
*/


mysql_close();

?>