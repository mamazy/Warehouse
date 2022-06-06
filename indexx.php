<?php
//including the database connection file
include_once("configg.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM ANBAR ORDER BY ID ASC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ANBAR ORDER BY ID ASC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>

    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>SEQ</td>
            <td>QTY</td>
            <td>CONDITION</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['QTY']."</td>";
            echo "<td>".$res['COND']."</td>";
            echo "<td>".$res['PRICE']."</td>";    
            echo "<td><a href=\"edit.php?ID=$res[ID]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>