<?php
include'config.php';
header('Content-Typr:application/json');
header('Acess-Control-Allow-Origin:*');



$data=json_decode(file_get_content("php/input"),true);
$students_id=$data['sid'];

$sql="SELECT *FROM students WHERE id={$students_id}";
$result=mysqli_query($conn,$sql) or die("SQL Query Failed");
if(mysqli_num_rows($result)>0){
    $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}
else{
    echo json_encode(array('message'=> 'No Record found.','status'=>false));
}


?>