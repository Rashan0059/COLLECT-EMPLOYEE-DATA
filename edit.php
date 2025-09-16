<?php 
$name = "localhost";
$uname = "root";
$password = "";
$dbname = "application";

$conn = mysqli_connect($name, $uname, $password, $dbname);

if (!$conn){
    die("connection failedd:".
    mysqli_connect_error());
}

$id=$_GET ['id'];
//SELECT quary
$Sql = "SELECT `name`,`contact`,`age`,`gender`,`idnumber`,`address` FROM form_data WHERE `idnumber`='$id' ";
$output = $conn->query($Sql);
$row = $output->fetch_assoc();
?>

<html>
    <head>
        <title>edit</title>
    </head>
    <body>
        <h1><b>Edit Application Form</b></h1>
    
        <form action="update.php" method="GET">
            <lable for="name">Name:</lable>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">  <br><br><br>
        
            <lable for="contact">contact:</lable>
            <input type="text"  name="contact" value="<?php echo $row['contact']; ?>"><br><br><br><br><br>
    


                <lable for="age">age:</lable>   
                <input type="text"  name="age" value="<?php echo $row['age']; ?>"><br><br><br>
    
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <!--<option value="">Select</option>-->
                    <option value="">Select</option>
                    <option value="male" <?php if($row['gender']=="male"){ echo 'selected'; }else{ echo ""; }?>>Male</option>
                    <option value="female" <?php if($row['gender']=="female"){ echo 'selected'; }else{ echo "";  }?>>Female</option>
                </select><br><br><br>
            
            <lable for="id number">id number:</lable>
            <input type="text"  name="idnumber" value="<?php echo $row['idnumber']; ?>"><br><br><br>
            <input type="hidden"  name="oldIdnumber" value="<?php echo $row['idnumber']; ?>">
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
            
            <br><br>

            <input type="submit" value="update"></form>
    </body>
</html>


