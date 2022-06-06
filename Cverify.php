<?php
require('db.php');
include("auth.php");
?>

<?php
$url != 'Cverify.php';

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
   <title>CAT Part# RESULT - Secured</title>
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
$username = "WRITE_DB_USER";
$password = "WRITE_DB_PASS";
$dbname = "WRITE_DB_NAME";

// Create connection
$conn = new mysqli(localhost, WRITE_DB_USER, WRITE_DB_PASS, WRITE_DB_NAME);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT PN , DES, PRICE, WEIGHT  FROM CAT  WHERE PN  LIKE '%".$_POST['id']."%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table id=parts><tr><th>PART#</th><th>PART NAME</th><th>PRICE</th><th>WEIGHT (LBS)</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["PN"]."</td><td>".$row["DES"]."</td><td>".$row["PRICE"]."</td><td>".$row["WEIGHT"]."</td></tr>";
}
echo "</table><br><center><button class=button onclick=goBack()>TRY ANOTHER PART NUMBER</button></center>";
} else {
echo "<center color=red><img src=img/error.png /><br />INCORRECT PART NUMBER<br><button class=button onclick=goBack()>TRY ANOTHER PART NUMBER</button><br></center>";
}
$conn->close();
?>
  
</div>

</body></html>