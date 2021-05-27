<?php
include("../admin/sql_connect.php");
$id=$_POST['id_pod_cat'];
$sql = "SELECT * FROM obj WHERE id=$id";
    
$result = sqlsrv_query($conn, $sql);
if($result == false) {
    die('base connect error');
}
$log=[];
while($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    $log=$row;
  }
echo json_encode($log);

