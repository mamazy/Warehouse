<?php
session_start();
require('db.php');


// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }
         else{
	echo "<link rel='stylesheet' href='style.css' />
	<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?><head>
<title>LOGIN</title>
<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css"> 
    <link rel="apple-touch-icon-precomposed" href="Cat--logo.png">

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>



<div class="form">
<h1>Log In</h1>
<form action="?" method="post" name="login">

<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required /><br><br>


<input name="submit" type="submit" value="Login" />

</form>

</div>
<?php } ?>
</body>
</html>