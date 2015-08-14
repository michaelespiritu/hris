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
        <h3 class="text-center">Personal Information</h3>
        <hr>
        <div class="clearfix">
          <div class="clearfix">
            <div class="form-group col-md-4">
              <label for="Surname">Surname</label>
              <input type="text" class="form-control required-form" name="p_q_1" id="Surname" placeholder="Surname">
            </div>
            <div class="form-group col-md-4">
              <label for="Given Name">Given Name</label>
              <input type="text" class="form-control required-form" name="p_q_2" id="Given Name" placeholder="Given Name">
            </div>
            <div class="form-group col-md-4">
              <label for="Middle Name">Middle Name</label>
              <input type="text" class="form-control required-form" name="p_q_3" id="Middle Name" placeholder="Middle Name">
            </div>
          </div><!-- /clearfix -->
          <div class="form-group  col-md-12">
            <label for="Citizenship">Citizenship</label>
            <input type="text" class="form-control required-form" name="p_q_4" id="Citizenship" placeholder="Citizenship">
          </div>
          <div class="clearfix">
            <div class="form-group col-md-10 ">
              <label for="Home Address">Home Address</label>
              <input type="text" class="form-control required-form" name="p_q_5" id="Home Address" placeholder="Home Address">
            </div>
            <div class="form-group col-md-2">
              <label for="Zip Code">Zip Code</label>
              <input type="text" class="form-control required-form" name="p_q_6" id="Zip Code Home" placeholder="Zip Code">
            </div>
          </div>
          <div class="clearfix">
            <div class="form-group col-md-10">
              <label for="Provincial Address">Provincial Address</label>
              <input type="text" class="form-control required-form" name="p_q_7" id="Provincial Address" placeholder="Provincial Address">
            </div>
            <div class="form-group col-md-2">
              <label for="Zip Code">Zip Code</label>
              <input type="text" class="form-control required-form" name="p_q_8" id="Zip Code Provincial" placeholder="Zip Code">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <div class="form-group col-md-2">
              <label for="Age">Age</label>
              <input type="text" class="form-control required-form" name="p_q_9" id="Age" placeholder="Age">
            </div>
            <div class="form-group col-md-2">
              <label for="Date of Birth">Date of Birth</label>
              <input type="text" class="form-control required-form" name="p_q_10" id="date-of-birth" placeholder="Date of Birth">
            </div>
            <div class="form-group col-md-2">
              <label for="Place of Birth">Place of Birth</label>
              <input type="text" class="form-control required-form" name="p_q_11" id="place-of-birth" placeholder="Place of Birth">
            </div>
            <div class="form-group col-md-2">
              <label for="Sex">Sex</label>
              <select name="p_q_12" class="form-control required-form">
                <option></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="Height">Height</label>
              <input type="text" class="form-control required-form" name="p_q_13" id="height" placeholder="Height">
            </div>
            <div class="form-group col-md-2">
              <label for="Weight">Weight</label>
              <input type="text" class="form-control required-form" name="p_q_14" id="weight" placeholder="Weight">
            </div>
          </div><!-- /clearfix -->

          <div class="form-group col-md-12">
            <label for="Religion">Religion</label>
            <input type="text" class="form-control required-form" name="p_q_15" id="religion" placeholder="Religion">
          </div>

          <div class="clearfix">
            <div class="form-group col-md-2">
              <label for="Civil Status">Civil Status</label>
              <input type="text" class="form-control required-form" name="p_q_16" id="civil-status" placeholder="Civil Status">
            </div>
            <div class="form-group col-md-2">
              <label for="Complexion">Complexion</label>
              <input type="text" class="form-control required-form" name="p_q_17" id="complexion" placeholder="Complexion">
            </div>
            <div class="form-group col-md-2">
              <label for="eye-color">Eye Color</label>
              <input type="text" class="form-control required-form" name="p_q_18" id="eye-color" placeholder="Eye Color">
            </div>
            <div class="form-group col-md-2">
              <label for="Hair">Hair</label>
              <input type="text" class="form-control required-form" name="p_q_19" id="hair" placeholder="Hair">
            </div>
            <div class="form-group col-md-2">
              <label for="blood-type">Blood Type</label>
              <input type="text" class="form-control required-form" name="p_q_20" id="blood-type" placeholder="Blood Type">
            </div>
            <div class="form-group col-md-2">
              <label for="Built">Built</label>
              <input type="text" class="form-control required-form" name="p_q_21" id="built" placeholder="Built">
            </div>
          </div><!-- /clearfix -->

          <div class="clearfix">
            <div class="form-group col-md-3">
              <label for="PAG-IBIG NO.">PAG-IBIG NO.</label>
              <input type="text" class="form-control required-form" name="p_q_22" id="pag-ibig" placeholder="PAG-IBIG NO.">
            </div>
            <div class="form-group col-md-3">
              <label for="TIN">TIN</label>
              <input type="text" class="form-control required-form" name="p_q_23" id="tin" placeholder="TIN">
            </div>
            <div class="form-group col-md-3">
              <label for="philhealth">PHILHEALTH NO.</label>
              <input type="text" class="form-control required-form" name="p_q_24" id="philhealth" placeholder="PHILHEALTH NO.">
            </div>
            <div class="form-group col-md-3">
              <label for="sss">SSS NO.</label>
              <input type="text" class="form-control required-form" name="p_q_25" id="sss" placeholder="SSS NO.">
            </div>
          </div><!-- /clearfix -->

          <div class="clearfix">
            <div class="form-group col-md-4">
              <label for="Phone No.">Phone No.</label>
              <input type="text" class="form-control required-form" name="p_q_26" id="phone" placeholder="Phone No.">
            </div>
            <div class="form-group col-md-4">
              <label for="Cell No.">Cell No.</label>
              <input type="text" class="form-control required-form" name="p_q_27" id="cell" placeholder="Cell No.">
            </div>
            <div class="form-group col-md-4">
              <label for="Email Address">Email Address</label>
              <input type="text" class="form-control required-form" name="p_q_28" id="email-address" placeholder="Email Address">
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