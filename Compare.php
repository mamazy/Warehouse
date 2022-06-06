<?php
require('db.php');
include("auth.php");
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
   <title>COMPARE Part# Search - Secured</title>
   <style>    
.responsive {
  width: 100%;
  max-width: 360px;
  height: auto;
}

</style>



</style>
</head>
<body>
<?php
include_once "header.php"; // this will include a.php
?>

 <script language="javascript" type="text/javascript">
function check(e) {
    var keynum
    var keychar
    var numcheck
    // For Internet Explorer
    if (window.event) {
        keynum = e.keyCode;
    }
    // For Netscape/Firefox/Opera
    else if (e.which) {
        keynum = e.which;
    }
    keychar = String.fromCharCode(keynum);
    //List of special characters you want to restrict
    if (keychar == "'" || keychar == "`" || keychar =="!" || keychar =="@" || keychar =="#" || keychar =="$" || keychar =="%" || keychar =="^" || keychar =="&" || keychar =="*" || keychar =="(" || keychar ==")" || keychar ==" " || keychar =="_" || keychar =="+" || keychar =="=" || keychar =="/" || keychar =="~" || keychar =="<" || keychar ==">" || keychar =="," || keychar ==";" || keychar ==":" || keychar =="|" || keychar =="?" || keychar =="{" || keychar =="}" || keychar =="[" || keychar =="]" || keychar =="¬" || keychar =="£" || keychar =='"' || keychar =="\\") {
        return false;
    } else {
        return true;
    }
}
</script>


 <script type="text/javascript">
  function validar()
  {
     var right = 1;

     if(document.getElementById('id').value.length==0)
     {
        right = 0;
        document.getElementById('emptypart').innerHTML = "<font color=red face=tahoma>Please Enter Correct Part Number</font>";
     }
   
    if(right == 1)
    {
      document.forms["formu"].submit();
    }

  }
  </script> 
 
</head>


<div id="w">
   <center> 
   <img src="img/compare.jpg" class="responsive">
   <form action="CompareVerify.php" class=" sign-in" method="post" name="formu" id="formu">
      <div style="margin:0;padding:0"></div>
       
        <div class="clearfix">
          <input id="id" name="id" tabindex="1" type="text" value="" onkeypress="return check(event)" />
          
          <button class="button" id="id" name="commit" type="button" tabindex=5 onclick="validar()";>SEARCH</button><div id="emptypart">        </div>
        </div>
     </form>

         
        </center>
</div>


</body></html>