<?php 
$serverName = "LAPTOP-07A0H1O4"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"project");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     //echo "<script>alert('Connected');</script>";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>