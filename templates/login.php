<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRIS</title>

    <!-- Bootstrap -->
    <link href="<?php echo BASE_URI; ?>/templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>/templates/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="not-logged-in">
     <div class="container">

      <form class="form-signin well" method="POST" action="login_post.php">
        <?php displayMessage(); ?>
        <h2 class="form-signin-heading text-center">Please sign in</h2>
        <label for="inputID" class="sr-only">Employee ID</label>
        <input type="text" id="inputEmail" class="form-control" name="employee_id" placeholder="Employee ID" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="col-md-6 no-padding"><p><a href="#">Forgot Password?</a></p></div>
        
    		<div class="col-md-6 no-padding"><p class="text-right"><a href="applicant.php">Applicant?</a></p></div>
    		<hr>
        <button class="btn btn-lg btn-primary btn-block" name="login_submit" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo BASE_URI; ?>/templates/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URI; ?>/templates/js/script.js"></script>
  </body>
</html>