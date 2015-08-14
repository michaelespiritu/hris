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

      <form class="width-980 well" method="post" action="career.php">
        <?php displayMessage(); ?>
        <h2 class="form-signin-heading text-center">Application Form</h2>
        <h3 class="text-center">Career Information</h3>
        <hr>
        <div class="clearfix">
          <div class="clearfix">
            <h5 class="text-center">Position Applied For</h5>
            <hr>
            <div class="form-group col-md-4">
              <label for="First Choice">First Choice</label>
              <input type="text" class="form-control required-form" name="p_q_1" id="First Choice" placeholder="First Choice">
            </div>
            <div class="form-group col-md-4">
              <label for="Second Choice">Second Choice</label>
              <input type="text" class="form-control required-form" name="p_q_2" id="Second Choice" placeholder="Second Choice">
            </div>
            <div class="form-group col-md-4">
              <label for="p_q_3">Minimum Expected Salary</label>
              <input type="text" class="form-control required-form" name="p_q_3" id="p_q_3" placeholder="Minimum Expected Salary">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <div class="form-group col-md-9 ">
              <label for="p_q_4">Office Machines or Equipment you can operate</label>
              <input type="text" class="form-control required-form" name="p_q_4" id="p_q_4" placeholder="Office Machines or Equipment you can operate">
            </div>
            <div class="form-group col-md-3">
              <label for="p_q_5">Employement Availability</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_5" id="p_q_5" placeholder="Employement Availability">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <hr>
            <h5 class="text-center">Skills</h5>
            <hr>
            <div class="form-group col-md-3 ">
              <label for="p_q_6">Skill</label>
              <input type="text" class="form-control required-form" name="p_q_6" id="p_q_6" placeholder="Skill">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_7">Proficiency</label>
              <select class="form-control  required-form" name="p_q_7">
                <option></option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
              </select>
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_8">Year Acquired</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_8" id="p_q_8" placeholder="Year Acquired">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_8">Year Last Used</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_8" id="p_q_8" placeholder="Year Last Used">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_9">Skill</label>
              <input type="text" class="form-control required-form" name="p_q_9" id="p_q_9" placeholder="Skill">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_10">Proficiency</label>
              <select class="form-control  required-form" name="p_q_10">
                <option></option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
              </select>
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_11">Year Acquired</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_11" id="p_q_11" placeholder="Year Acquired">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_12">Year Last Used</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_12" id="p_q_12" placeholder="Year Last Used">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_13">Skill</label>
              <input type="text" class="form-control required-form" name="p_q_13" id="p_q_13" placeholder="Skill">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_14">Proficiency</label>
              <select class="form-control  required-form" name="p_q_14">
                <option></option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
              </select>
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_15">Year Acquired</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_15" id="p_q_15" placeholder="Year Acquired">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_16">Year Last Used</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_16" id="p_q_16" placeholder="Year Last Used">
            </div>

          </div><!-- /clearfix -->
          <div class="clearfix">
            <hr>
            <h5 class="text-center">Licenses / Certifications</h5>
            <hr>
            <div class="form-group col-md-2 ">
              <label for="p_q_17">License / Cert. </label>
              <input type="text" class="form-control required-form" name="p_q_17" id="p_q_17" placeholder="Name">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_18">License No.</label>
              <input type="text" class="form-control required-form" name="p_q_18" id="p_q_18" placeholder="License No.">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_19">Date Issued</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_19" id="p_q_19" placeholder="Date Issued">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_20">Issued By</label>
              <input type="text" class="form-control required-form" name="p_q_20" id="p_q_20" placeholder="Issued By">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_21">Valid Until</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_21" id="p_q_21" placeholder="Valid Until">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_22">Issuing Country</label>
              <input type="text" class="form-control required-form" name="p_q_22" id="p_q_22" placeholder="Issuing Country">
            </div>
            <div class="form-group col-md-8 ">
              <label for="p_q_23">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_23" id="p_q_23" placeholder="Organization">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_24">Rating</label>
              <input type="text" class="form-control required-form" name="p_q_24" id="p_q_24" placeholder="Rating">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_25">License / Cert. </label>
              <input type="text" class="form-control required-form" name="p_q_25" id="p_q_25" placeholder="Name">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_26">License No.</label>
              <input type="text" class="form-control required-form" name="p_q_26" id="p_q_26" placeholder="License No.">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_27">Date Issued</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_27" id="p_q_27" placeholder="Date Issued">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_28">Issued By</label>
              <input type="text" class="form-control required-form" name="p_q_28" id="p_q_28" placeholder="Issued By">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_29">Valid Until</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_29" id="p_q_29" placeholder="Valid Until">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_30">Issuing Country</label>
              <input type="text" class="form-control required-form" name="p_q_30" id="p_q_30" placeholder="Issuing Country">
            </div>
            <div class="form-group col-md-8 ">
              <label for="p_q_31">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_31" id="p_q_31" placeholder="Organization">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_32">Rating</label>
              <input type="text" class="form-control required-form" name="p_q_32" id="p_q_32" placeholder="Rating">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_33">License / Cert. </label>
              <input type="text" class="form-control required-form" name="p_q_33" id="p_q_33" placeholder="Name">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_34">License No.</label>
              <input type="text" class="form-control required-form" name="p_q_34" id="p_q_34" placeholder="License No.">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_35">Date Issued</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_35" id="p_q_35" placeholder="Date Issued">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_36">Issued By</label>
              <input type="text" class="form-control required-form" name="p_q_36" id="p_q_36" placeholder="Issued By">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_37">Valid Until</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_37" id="p_q_37" placeholder="Valid Until">
            </div>
            <div class="form-group col-md-2 ">
              <label for="p_q_38">Issuing Country</label>
              <input type="text" class="form-control required-form" name="p_q_38" id="p_q_38" placeholder="Issuing Country">
            </div>
            <div class="form-group col-md-8 ">
              <label for="p_q_39">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_39" id="p_q_39" placeholder="Organization">
            </div>
            <div class="form-group col-md-4 ">
              <label for="p_q_40">Rating</label>
              <input type="text" class="form-control required-form" name="p_q_40" id="p_q_40" placeholder="Rating">
            </div>
          </div><!-- /clearfix -->

          <div class="clearfix">
            <hr>
            <h5 class="text-center">Ogranization</h5>
            <hr>
            <div class="form-group col-md-3 ">
              <label for="p_q_41">Membership</label>
              <input type="text" class="form-control required-form" name="p_q_41" id="p_q_41" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_42">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_42" id="p_q_42" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_43">Position</label>
              <input type="text" class="form-control required-form" name="p_q_43" id="p_q_43" placeholder="Position">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_44">Membership Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_44" id="p_q_44" placeholder="Membership Date">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_45">Membership</label>
              <input type="text" class="form-control required-form" name="p_q_45" id="p_q_45" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_46">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_46" id="p_q_46" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_47">Position</label>
              <input type="text" class="form-control required-form" name="p_q_47" id="p_q_47" placeholder="Position">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_48">Membership Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_48" id="p_q_48" placeholder="Membership Date">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_49">Membership</label>
              <input type="text" class="form-control required-form" name="p_q_49" id="p_q_49" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_50">Organization</label>
              <input type="text" class="form-control required-form" name="p_q_50" id="p_q_50" placeholder="Membership">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_51">Position</label>
              <input type="text" class="form-control required-form" name="p_q_51" id="p_q_51" placeholder="Position">
            </div>
            <div class="form-group col-md-3 ">
              <label for="p_q_52">Membership Date</label>
              <input type="text" class="form-control required-form date-picker" name="p_q_52" id="p_q_52" placeholder="Membership Date">
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