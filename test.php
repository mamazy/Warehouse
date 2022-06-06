<html>
  <head>
    <title>Google recapcha demo - Codeforgeek</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script language=text/javascript>
        
        
        var response = grecaptcha.getResponse();

if(response.length == 0)
    //reCaptcha not verified

else
    //reCaptch verified
    </script>
  </head>
  <body>
    <center><h1>Google reCAPTHA Demo</h1>
    <form id="comment_form" action="post.php" method="post">
      <input type="email" placeholder="Type your email" size="40"><br><br>
      <textarea name="comment" rows="8" cols="39"></textarea><br><br>
      <div class="g-recaptcha" data-sitekey="6LewIhcTAAAAAEzuUlzs0Sb-NqkSy1Jdepg5fYb5"></div>
      <input type="submit" name="submit" value="Post comment"><br><br>

    </form></center>
  </body>
</html>