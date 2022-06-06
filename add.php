<?php
require('db.php');
include("auth.php");
?>

<html>
<head>    
    <title>ADD DATA TO Warehouse</title>
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
<?php
include_once "header.php"; // this will include a.php
?>
<br><br>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $SEQ = $_POST['SEQ'];
    $PARTNAME = $_POST['PARTNAME'];
    $PARTNUMBER = $_POST['PARTNUMBER'];
    $QTY = $_POST['QTY'];
    $SOTOON = $_POST['SOTOON'];
    $ROW = $_POST['ROW'];
    $COND = $_POST['COND'];
    $PRICE = $_POST['PRICE'];
    
    // checking empty fields
    if(empty($SEQ) || empty($PARTNAME) || empty($PARTNUMBER)| empty($QTY)| empty($COND)| empty($PRICE)) {                
        if(empty($SEQ)) {
            echo "<font color='red'>ITEM field is empty.</font><br/>";
        }
        
        if(empty($PARTNAME)) {
            echo "<font color='red'>PART NAME field is empty.</font><br/>";
        }
        
        if(empty($PARTNUMBER)) {
            echo "<font color='red'>PART NUMBER field is empty.</font><br/>";
        }
        if(empty($QTY)) {
            echo "<font color='red'>QTY field is empty.</font><br/>";
        }
        if(empty($COND)) {
            echo "<font color='red'>MORE field is empty.</font><br/>";
        }
        if(empty($PRICE)) {
            echo "<font color='red'>PRICE field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO ANBAR (SEQ,PARTNAME,PARTNUMBER,QTY,SOTOON,ROW,COND,PRICE) VALUES('$SEQ','$PARTNAME','$PARTNUMBER','$QTY','$SOTOON','$ROW','$COND','$PRICE')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><BR /><a href='add-data.php'>You can Add Next Part Now</a>";
    }
}
?>
</body>
</html>