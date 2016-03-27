<?php
session_start();
ob_start();

mysql_connect("localhost", "root", "");
mysql_select_db("db_booking");

function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
	$str="";
	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}
function refresh($target,$time)
	{echo '<meta http-equiv="refresh" content="'.$time.';url='.$target.'">';}

?>