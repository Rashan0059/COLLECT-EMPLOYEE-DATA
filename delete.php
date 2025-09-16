<?php

$name = "localhost";
$uname = "root";
$password = "";
$dbname = "application";

//connection
$conn = mysqli_connect($name, $uname, $password, $dbname);

if (!$conn){
    die("connection failedd:".
    mysqli_connect_error());
}

//Delete query
$id=$_GET ['id'];
$sql = "DELETE FROM form_data WHERE idnumber  = $id ";


//query exicute
if (mysqli_query($conn,$sql)){

    echo "delete successfully!";

}else{
    echo "error:";
}

?>