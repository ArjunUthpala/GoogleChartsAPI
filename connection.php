<?php

$conn=new mysqli("localhost","root","","chart_api_test");
if($conn->connect_errno){
	echo "Failed to connect to MySQL:" .$conn->connect_error;
}else
	echo "OK";

?>