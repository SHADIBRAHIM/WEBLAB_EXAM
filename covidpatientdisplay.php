<?php
require 'DBConnection.php';
$query ="SELECT * FROM patient";

$result = mysqli_query($db,$query);

// echo mysqli_num_rows($result);

echo "<h2 align='center'>COVID REGISTRATION PORTAL </h2>";
echo "<table border= '1' align ='center'>";
echo "<tr><th> Patient_ID</th><th>Name</th><th>Age</th><th>Address</th><th>Date_of_Admission</th><th>Doctor</th><th>CovidResult</th></tr>";
echo "<form action ='newinsert.php' method='post'>";
echo "<tr>";
echo "<td><input type = 'submit' value='INSERT'></td>";
echo"<td><input type ='text' name='patient_name'></td>";
echo"<td><input type='number' name='age'></td>";
echo"<td><input type ='text' name='address'></td>";
echo"<td><input type ='date' name ='date'></td>";
echo"<td><input type='text' name='doctor'></td>";
echo"<td><input type ='text' name='covid_result'></td>";
echo"</tr>";
echo"</form>";

if(mysqli_num_rows($result)>0){
    
    while($row= mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["pid"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["docname"]."</td>";
        echo "<td>".$row["covid"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

    
}
?>