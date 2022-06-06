<?php
require('db.php');
include("auth.php");
?>

<?php
$url != 'Shopresult.php';

if ($_SERVER['HTTP_REFERER'] == $url) {
  header('Location: index.php'); //redirect to some other page
  exit();
}
?>
 <!doctype html>
<html lang=''>
<head>
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
   <title>BEARING Part Name Result - Secured</title>
</head>
<body>
<?php
include_once "header.php"; // this will include a.php
?>
<br><br>
    
<div id="w">
    <header class="clearfix">
        <div id="info">
 
<?php


$id=(int)$_POST['id'];

$servername = "localhost";
$username = "WRITE_DBUSER";
$password = "WRITE_DBPASS";
$dbname = "WRITE_DBNAME";

// Create connection
$conn = new mysqli(localhost, WRITE_DBUSER, WRITE_DB_PASS, WRITE_DB_NAME);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `BEARING` WHERE `BRAND` LIKE '%".$_POST['id']."%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table id=parts><tr><th>ID</th><th>STATUS</th><th>PART NAME</th><th>PART NUMBER</th><th>QTY</th><th>BRAND</th><th>CONDITION</th><th>MORE</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["ID"]."</td><td>".$row["STATUS"]."</td><td>".$row["PARTNAME"]."</td><td>".$row["PARTNUMBER"]."</td><td>".$row["QTY"]."</td><td>".$row["BRAND"]."</td><td>".$row["COND"]."</td><td>".$row["MORE"]."</td></tr>";
}
echo "</table><br><center><button class=button onclick=goBack()>TRY ANOTHER BRAND</button></center>";
} else {
echo "<center color=red><img src=img/error.png /><br />INCORRECT BRAND<br><button class=button onclick=goBack()>TRY ANOTHER BRAND</button><br></center>";
}
$conn->close();
?>
  
</div>

</body></html>