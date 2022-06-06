<?php
require('db.php');
include("auth.php");
?>

<html>
<head>    
    <title>ADD DATA TO SHOP</title>
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
    <br/><br/><B>ADD PARTS TO SHOP</B>
 
    <form action="Shop-add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>SEQ</td>
                <td><input type="text" name="SEQ"></td>
            </tr>
            <tr> 
                <td>Part Name</td>
                <td><input type="text" name="PARTNAME"></td>
            </tr>
            <tr> 
                <td>Part Number</td>
                <td><input type="text" name="PARTNUMBER"></td>
            </tr>
            <tr> 
                <td>QTY</td>
                <td><input type="text" name="QTY"></td>
            </tr>
            <tr> 
                <td>CONDITION</td>
                <td><input type="text" name="COND"></td>
            </tr>
            <tr> 
                <td>PRICE</td>
                <td><input type="text" name="PRICE"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>