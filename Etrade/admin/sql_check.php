<?php
session_start();
include("sql_connect.php");
$sql = "SELECT [name],[login],[password] FROM users";
    
$result = sqlsrv_query($conn, $sql);
if($result == false) {
    die(print_r(sqlsrv_errors(), true));
}

function checkAdmin($login,$password){
    Global $conn;
    $query="SELECT [name],[login],[password] FROM users WHERE [login]='$login' and [password]='$password'";
    $result=sqlsrv_query($conn,$query);
    $array=[];
    while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
      array_push($array,$row);
    }
    $_SESSION['name']=$array[0]['name'];
    return count($array);

}
 
