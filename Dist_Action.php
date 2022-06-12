<?php

include 'connection.php';






$dist_name = $_GET['dist'];
$Remarks = $_GET['Remarks'];
//echo $dist_;
//echo $Remarks;

$sql = "INSERT INTO dist_master (Dist_Name, Remarks ) VALUES ('$dist_name', '$Remarks')";

if ($conn -> query($sql) === TRUE){
    echo "New Record created Successfully";
}
else{
    echo "Error: ".$sql. "<br>" . $conn -> error;
}


?>


