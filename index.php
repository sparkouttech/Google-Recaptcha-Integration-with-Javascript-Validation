<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Register</title>
</head>
<body id="main" style="background-image: url('img/01.jpg'); width: 100%">
  <div id="control">
    <h3>Register with Validation</h3>
    <form action="success.php" method="post" onsubmit="return form_validation();">
      <label>Enter User Name</label>
      <input type="text" name="username" id="username" placeholder="Username" style="padding-left:10px;"><br>
      <label>Enter Password</label>
      <input type="Password" name="Password" id="Password" placeholder="Password" style="padding-left:10px;"><br>
      <br>
      <div style="margin-left: 10%;">
      <div class="g-recaptcha" data-sitekey="6LfjLYgUAAAAADBUjmCKV5vBzGFK2KIgm21LtQgp"></div>
      </div>
      <input type="submit" name="submit">
    </form>
  </div>
  <!-- Recaptcha script inclusion -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax_validation.js"></script>
</body>
</html>