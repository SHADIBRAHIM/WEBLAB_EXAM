<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center>
       <marquee behaviour="slide>" <h2>ASTER MIMS PATIENT  REGISTARTION</h2></marquee>
    </center>
    <form name="covidform" onsubmit="validate()" method="POST" action="covreg.php">
        <table border="2" align="center" cellpadding="5" cellspacing="5">
            <tr>
                <td> Enter Patient Id :</td>
                <td> <input type="text" name="pid" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Name :</td>
                <td> <input type="text" name="name" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Age :</td>
                <td> <input type="text" name="age" size="48"> </td>
            </tr>
            <tr>
                <td> Enter address :</td>
                <td> <input type="text" name="address" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Date of Admission: </td>
                <td> <input type="text" name="doa" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Doctors Name: </td>
                <td> <input type="text" name="docname" size="48"> </td>
            </tr>
            <tr>
                <td> Enter Medicine name: </td>
                <td> <input type="text" name="medname" size="48"> </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
        <?php
        echo "<a href = 'newindex.php'>CLICK here for COVID CLINIC REGISTRATION</a>";
        ?>
    </form>
</body>
</html>