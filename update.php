<?php
require('db.php');
include("auth.php");
?>

<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/navstyles.css">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script>
function goBack() {
    window.history.back()
}
</script>
   <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/styles.css" />
            <link rel="stylesheet" href="css/responsive.css" />

   <script src="js/script.js"></script>
   <title>Warehouse Part# Result - Secured</title>
</head>
<body>

<?php
include_once "header.php"; // this will include a.php
?>
<br><br>


<?php
//including the database connection file
include_once("configg.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM ANBAR ORDER BY ID DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ANBAR ORDER BY ID DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Update Successful</title>
</head>
 
<body>
    <a href="add.html">Add New Data</a><br/><br/>
 
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
            echo "<td>".$res['SEQ']."</td>";
            echo "<td>".$res['QTY']."</td>";
            echo "<td>".$res['COND']."</td>";    
            echo "<td><a href=\"edit.php?ID=$res[ID]\">Edit</a></td>";        
        }
        ?>
    </table>
</body>
</html>