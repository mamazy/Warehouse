<?php
require('db.php');
include("auth.php");
?>

<html>
<head>    
    <title>Edit DXB Data</title>
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
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $ID = $_POST['ID'];
    $QTY = $POST['QTY'];
    $MORE=$_POST['MORE'];
    $PRICE=$_POST['PRICE'];    
    
    // checking empty fields
    if (empty($MORE) || empty($PRICE)) {            
        if(empty($MORE)) {
            echo "<font color='red'>COND field is empty.</font><br/>";
        }
        
        if(empty($PRICE)) {
            echo "<font color='red'>PRICE field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE DXB SET MORE='$MORE',PRICE='$PRICE' WHERE ID=$ID");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting ID from url
$ID = $_GET['ID'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM DXB WHERE ID=$ID");
 
while($res = mysqli_fetch_array($result))
{
    $QTY = $res['QTY'];
    $MORE = $res['MORE'];
    $PRICE = $res['PRICE'];
    $PARTNAME = $res['PARTNAME'];
    $PARTNUMBER = $res['PARTNUMBER'];
    $LOCATION = $res['LOCATION'];
    $ID = $res['ID'];
  
}
?>

<table id=parts><tr><th>ID</th><th>PART NAME</th><th>PART NUMBER</th><th>QTY</th><th>LOCATION</th><th>MORE</th><th>PRICE USD</th></tr>

<tr><td><?php echo $ID;?></td><td><?php echo $PARTNAME;?></td><td><?php echo $PARTNUMBER;?></td><td><?php echo $QTY;?></td><td><?php echo $LOCATION;?></td><td><?php echo $MORE;?></td><td><?php echo $PRICE;?></td></tr>




    <br/><br/>
    
    <form name="form1" method="post" action="dxbeditt.php">
        <table border="0">
                       <tr> 
                <td>Update Sale Condition: </td>
                <td><textarea rows="6" cols="50" name="MORE"><?php echo $MORE;?></textarea></td>
            </tr>
            <tr> 
                <td>Update Price: </td>
                <td><input type="text" name="PRICE" value="<?php echo $PRICE;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body></html>