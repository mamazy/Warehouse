<?php
require('db.php');
include("auth.php");
?>

<html>
<head>    
    <title>Edit Bearings Data</title>
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
    $COND=$_POST['COND'];
    $MORE=$_POST['MORE'];
    $PRICE=$_POST['PRICE'];  
    
    
    // checking empty fields
    if (empty($COND) || empty($PRICE)) {            
        if(empty($COND)) {
            echo "<font color='red'>Sale Condition field is empty.</font><br/>";
        }
         if(empty($MORE)) {
            echo "<font color='red'>Sale Condition field is empty.</font><br/>";
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
 
while($res = mysqli_fetch_array($result))
{
    $QTY = $res['QTY'];
    $COND = $res['COND'];
    $PRICE = $res['PRICE'];
    $PARTNAME = $res['PARTNAME'];
    $PARTNUMBER = $res['PARTNUMBER'];
    $SEQ = $res['SEQ'];
    $MORE = $res['MORE'];   
}
?>

<table id=parts><tr><th>SEQ</th><th>PART NAME</th><th>PART NUMBER</th><th>QTY</th><th>CONDITION</th><th>MORE</th><th>PRICE USD</th></tr>

<tr><td><?php echo $SEQ;?></td><td><?php echo $PARTNAME;?></td><td><?php echo $PARTNUMBER;?></td><td><?php echo $QTY;?></td><td><?php echo $COND;?></td><td><?php echo $MORE;?></td><td><?php echo $PRICE;?></td></tr>




    <br/><br/>
    
    <form name="form1" method="post" action="Beditt.php">
        <table border="0">
                       <tr> 
                <td>Update Sale Condition: </td>
                <td><textarea rows="6" cols="50" name="COND"><?php echo $COND;?></textarea></td>
            </tr>
            <td>Update MORE Details: </td>
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