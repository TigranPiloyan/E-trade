<?php
include("../admin/sql_connect.php");
$item=$_GET['id_cat'];
$sql = "SELECT * FROM pod_category WHERE id_d=$item";
    
$result = sqlsrv_query($conn, $sql);
if($result == false) {
    die('base connect error');
}
$log=[];
while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    array_push($log,$row);
  }
echo json_encode($log);
