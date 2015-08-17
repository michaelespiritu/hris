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

      <form class="width-980 well" method="post" action="applicant.php">
        <?php displayMessage(); ?>
        <h2 class="form-signin-heading text-center">Application Form</h2>
        <h3 class="text-center">Education Information</h3>
        <hr>
        <div class="clearfix">
          <div class="clearfix">
            <div class="form-group col-md-4">
              <label for="p_q_1">Title of Qualification</label>
              <input type="text" class="form-control required-form" name="p_q_1" id="p_q_1" placeholder="Title of Qualification">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_2">Specialization</label>
              <input type="text" class="form-control required-form" name="p_q_2" id="p_q_2" placeholder="Specialization">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_3">Units Earned</label>
              <input type="text" class="form-control required-form" name="p_q_3" id="p_q_3">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_4">Year</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_4" id="p_q_4">
            </div>
            <div class="form-group col-md-12">
              <label for="p_q_5">Institution</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_5" id="p_q_5" placeholder="Institution">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_6">Title of Qualification</label>
              <input type="text" class="form-control required-form" name="p_q_6" id="p_q_6" placeholder="Title of Qualification">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_7">Specialization</label>
              <input type="text" class="form-control required-form" name="p_q_7" id="p_q_7" placeholder="Specialization">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_8">Units Earned</label>
              <input type="text" class="form-control required-form" name="p_q_8" id="p_q_8">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_9">Year</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_9" id="p_q_9">
            </div>
            <div class="form-group col-md-12">
              <label for="p_q_10">Institution</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_10" id="p_q_10" placeholder="Institution">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_11">Title of Qualification</label>
              <input type="text" class="form-control required-form" name="p_q_11" id="p_q_11" placeholder="Title of Qualification">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_12">Specialization</label>
              <input type="text" class="form-control required-form" name="p_q_12" id="p_q_12" placeholder="Specialization">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_13">Units Earned</label>
              <input type="text" class="form-control required-form" name="p_q_13" id="p_q_13">
            </div>
            <div class="form-group col-md-2">
              <label for="p_q_14">Year</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_14" id="p_q_14">
            </div>
            <div class="form-group col-md-12">
              <label for="p_q_15">Institution</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_15" id="p_q_15" placeholder="Institution">
            </div>
          </div><!-- /clearfix -->
          <hr>
          <div class="clearfix">
            <div class="form-group col-md-4 ">
              <label for="p_q_16">Awards & Honor</label>
              <input type="text" class="form-control required-form" name="p_q_16" id="p_q_16" placeholder="Awards & Honor">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_17">Date Granted</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_17" id="p_q_17" placeholder="Date Granted">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_18">Grantor</label>
              <input type="text" class="form-control required-form" name="p_q_18" id="p_q_18" placeholder="Grantor">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_19">Awards & Honor</label>
              <input type="text" class="form-control required-form" name="p_q_19" id="p_q_19" placeholder="Awards & Honor">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_20">Date Granted</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_20" id="p_q_20" placeholder="Date Granted">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_21">Grantor</label>
              <input type="text" class="form-control required-form" name="p_q_21" id="p_q_21" placeholder="Grantor">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_22">Awards & Honor</label>
              <input type="text" class="form-control required-form" name="p_q_22" id="p_q_22" placeholder="Awards & Honor">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_23">Date Granted</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_23" id="p_q_23" placeholder="Date Granted">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_24">Grantor</label>
              <input type="text" class="form-control required-form" name="p_q_24" id="p_q_24" placeholder="Grantor">
            </div>
          </div><!-- /clearfix -->
          <hr>
          <div class="clearfix">
            <h5 class="text-center">Field of Specialization</h5>
            <hr>
            <div class="form-group col-md-4 ">
              <label for="p_q_25">Training Title</label>
              <input type="text" class="form-control required-form" name="p_q_25" id="p_q_25" placeholder="Training Title">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_26">School Name</label>
              <input type="text" class="form-control required-form" name="p_q_26" id="p_q_26" placeholder="School Name">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_27">Training Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_27" id="p_q_27" placeholder="School Name">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_28">Training Title</label>
              <input type="text" class="form-control required-form" name="p_q_28" id="p_q_28" placeholder="Training Title">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_29">School Name</label>
              <input type="text" class="form-control required-form" name="p_q_29" id="p_q_29" placeholder="School Name">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_30">Training Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_30" id="p_q_30" placeholder="School Name">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_31">Training Title</label>
              <input type="text" class="form-control required-form" name="p_q_31" id="p_q_31" placeholder="Training Title">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_32">School Name</label>
              <input type="text" class="form-control required-form" name="p_q_32" id="p_q_32" placeholder="School Name">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_33">Training Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_33" id="p_q_33" placeholder="School Name">
            </div>
          </div><!-- /clearfix -->
          <hr>
          <div class="form-group col-md-12 text-right">
            <div class="form-group col-md-6 text-right sr-only"></div>
            <button type="submit" class="btn btn-default col-md-6" name="form-submit" id="form-required">Next <span class="glyphicon glyphicon-arrow-right"></span></button>
          </div>
        </div>
      </form>

    </div> <!-- /container -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo BASE_URI; ?>/templates/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URI; ?>/templates/js/jquery-ui.min.js"></script> 
    <script src="<?php echo BASE_URI; ?>/templates/js/script.js"></script>
  </body>
</html>