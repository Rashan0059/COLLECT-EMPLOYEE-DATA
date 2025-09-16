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



//SELECT quary

$Sql = "SELECT `name`,`age`,`gender`,`idnumber`,`address`,`contact` FROM form_data";
$output = $conn->query($Sql);


    
       echo "<style>table,th,td { 
            border:1px solid black;
            border-collapse: collapse
        }
     </style><table style='width: 100%;'>
            <tr>
                <th>no</th>
                <th>name</th>
                <th>id number</th>
                <th>gender</th>
                <th>age</th>
                <th>contact</th>             
                <th>address</th>
                <th>Action</th>
                
                </tr>";
       
$number=0;                
while ($row = $output->fetch_assoc()) {$number=$number+1;
    echo "<tr>";
        echo "<td>" ; echo $number; echo "</td>";
        echo "<td>" ; echo $row["name"]; echo "</td>";
        echo "<td>"; echo $row["idnumber"]; echo "</td>";
        echo "<td>"; echo $row["gender"]; echo "</td>";
        echo "<td>"; echo $row["age"]; echo "</td>";
        echo "<td>"; echo $row["contact"]; echo "</td>";
        echo "<td>"; echo $row["address"]; echo "</td>";
        $idNum=$row["idnumber"];
       echo "<td>"; echo "<form action='delete.php' method='GET'> <input type='hidden' value='$idNum' name='id'> <button type='submit'>Delete </button></form>";
        echo "<form action='edit.php' method='GET'> <input type='hidden' value='$idNum' name='id'> <button type='submit'>Edit </button></form>";
        echo "</td>";
     
}
echo  "</table>";

?>
