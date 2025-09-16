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
$name = $_GET ['name'];
$contact = $_GET ['contact'];
$age = $_GET ['age'];
$gender = $_GET ['gender'];
$idnumber = $_GET ['idnumber'];
$address = $_GET ['address'];

//update query
$id=$_GET ['oldIdnumber'];
$sql = "UPDATE `form_data` SET `name`='$name',`contact`='$contact', `age`='$age', `gender`='$gender', `idnumber`='$idnumber', `address`='$address' WHERE idnumber  = '$id' ";

//query exicute
if (mysqli_query($conn,$sql)){

    echo "update successfully!";

}else{
    echo "error:";
}

?>