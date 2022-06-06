<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
 
<meta charset="utf-8">
<title>Welcome Home - Secured</title>
<link rel="stylesheet" href="style.css" />
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #4567ac;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 800px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 800px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</head>
<body>
 <div class="topnav" id="myTopnav">
     <a><span>Welcome <?php echo $_SESSION['username']; ?> !</span></a>
  <a href="index.php">HOME</a>
  <a href="warehouse.php">WAREHOUSE</a>
    <a href="http://www.tmmtco.com/cparts/index.php">KOMATSU</a>
  <a href="Cindex.php">CATERPILLAR</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


</body>
</html>