<?php

require 'coviddb.php';

$query = "SELECT * FROM patient";


$result = mysqli_query($db,$query);
echo "<h2 align='center' style='color:#008888;'>PATIENT INFO</h2>";
echo "<table border='0' align='center' cellpadding='12'>";
echo "<tr><th>Patiend id</th><th>Name</th><th>Age</th><th>Address</th><th>Date of Admission</th><th>Consulting doctor</th><th>Medicines</th></tr>";
if(mysqli_num_rows($result)>0)
{

    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["pid"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["doa"]."</td>";
        echo "<td>".$row["docname"]."</td>";
        echo "<td>".$row["medname"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
