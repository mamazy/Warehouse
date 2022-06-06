<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/navstyles.css">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/style.css" />
   <script src="js/script.js"></script>  
    <title>Edit Bearings Data</title>
    
      <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/navstyles.css">
     <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/styles.css" />
            <link rel="stylesheet" href="css/responsive.css" />
               <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script>
function goBack() {
    window.history.back()
}
</script>

</head>
 
<body>
<?php
include_once "header.php"; // this will include a.php
?>

<br />

<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $ID = $_POST['ID'];
    $QTY = $POST['QTY'];
    $COND=$_POST['COND'];
    $MORE=$_POST['MORE'];
    $PRICE=$_POST['PRICE'];
    
    
    // checking empty fields
    if(empty($COND) |empty($MORE) | empty($PRICE)) {            
      
        if(empty($COND)) {
            echo "<font color='red'>CONDITION field is empty.</font><br/>";
        }
          if(empty($MORE)) {
            echo "<font color='red'>MORE field is empty.</font><br/>";
        }
    
        if(empty($PRICE)) {
            echo "<font color='red'>PRICE field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE BEARING SET COND='$COND',MORE='$MORE',PRICE='$PRICE' WHERE ID=$ID");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM BEARING WHERE ID=$ID");
 

?>
<br /><br><button class=button onclick=goBack()>CHECK FIELDS AGAIN</button><br>
</body>
</html>