<?php

//database create connection

$name = "localhost";
$uname = "root";
$password = "";
$dbname = "application";

$conn = mysqli_connect($name, $uname, $password, $dbname);

if (!$conn){
    die("connection failedd:".
    mysqli_connect_error());
}
//echo "connected successfully!";

//form data
$name = $_GET ['name'];
$age = $_GET ['age'];
$gender = $_GET ['gender'];
$idnumber = $_GET ['idnumber'];
$address = $_GET ['address'];
$contact = $_GET ['contact'];
//insert quary

$insertSql = "INSERT INTO form_data(name,age,contact,gender,idnumber,address) VALUE ('$name','$age','$contact','$gender','$idnumber','$address')";

if (mysqli_query($conn,$insertSql)){

    echo "inserted successfully!";

}else{
    echo "error:";
}

mysqli_close($conn);













/*
//print value

echo "name:".$name ."<br><br>";
echo "age:".$age ."<br>";
echo "gender:".$gender."<br>";
echo "idnumber:".$idnumber."<br>";
echo "address:".$address."<br>"*/
?>