<?php
$serverName = '192.168.3.215'; 
    $connectionInfo = array(
        "Database"=>"Etrade",
        "UID"=>"sa",
        "PWD"=>"123",
        "CharacterSet" => "UTF-8"
    ); $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if(!$conn) {
        die("Connection_error");
    }
    
  
    