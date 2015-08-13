<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRIS</title>

    <!-- Bootstrap -->
    <link href="<?php echo BASE_URI; ?>/templates/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?php echo BASE_URI; ?>/templates/css/jquery-ui.min.css" rel="stylesheet"> 
    <link href='<?php echo BASE_URI; ?>/templates/css/fullcalendar.css' rel='stylesheet' />
    <link href='<?php echo BASE_URI; ?>/templates/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <link href="<?php echo BASE_URI; ?>/templates/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="logged-in">
    <div class="container">
      <div class="navigation">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
              
              <ul class="nav navbar-nav navbar-right">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <li><a href="message.php"><span class="glyphicon glyphicon-envelope"></span> Message</a></li>
                <li><a href="activity.php"><span class="glyphicon glyphicon-calendar"></span> Activity</a></li>
                <li><a href="leave.php"><span class="glyphicon glyphicon-plane"></span> Leave</a></li>
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-pencil"></span> Forms <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Seminar</a></li>
                    <li><a href="#">COE</a></li>
                    <li><a href="#">Make up Class/es</a></li>
                    <li><a href="#">Business Form</a></li>
                    <li><a href="#">Off Campus Activity</a></li>
                    <li><a href="#">Clearance</a></li>
                  </ul>
                </li>
                <?php if($profile->role == 1): ?>
                  <li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                <?php endif; ?> 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Option <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php if($profile->role == 1): ?>
                      <li><a href="registration.php">Registration</a></li>
                    <?php endif; ?>
                    <li><a href="settings.php">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <form role="form" method="post" action="logout.php">
                          <input type="submit" name="do_logout" class="logout-btn" value="Logout" />
                        </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div><!-- /.navigation -->