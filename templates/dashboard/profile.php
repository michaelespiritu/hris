<?php include('../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding upper-header">
    <br>
    <div class="col-md-3 col-sm-12 col-xs-12 text-center">
      <img src="<?php echo getprofilepicture($profile->profile_picture); ?>" class="thumbnail profile-pic">
    </div>
    <div class="col-md-9 col-sm-12 col-xs-12">
      <div class="padding-15">
      <div class="col-md-6">
        <h2><?php echo $profile->first_name; ?> <?php echo $profile->last_name; ?></h2>
        <h3><?php echo getUser()['employee_id'];  ?></h3>
      </div>
      <div class="col-md-6">
        <h3><a href="mailto:<?php echo $profile->email; ?>"><?php echo $profile->email; ?></a></h3>
        <h3><a href="tel:<?php echo $profile->contact_number; ?>"><?php echo $profile->contact_number; ?></a></h3>
      </div>  
      
      <div class="col-md-12">
        <p><?php echo ($profile->role == 1) ? 'Admin' : 'Employee';?></p>
        <hr>
        <p><strong>Address: </strong><?php echo $profile->address; ?></p>
        
        <?php echo getIncaseOfEmergency($getEmergencyContact); ?>
      </div>
      </div>
    </div>

  </div><!-- Upper Header -->
</div>
<br>
<div class="row background-white padding-15">
  <div class="col-md-12">

    <div class="col-md-6">
      <h3>Requirements: </h3>
      <br>
      <p><strong>PAG IBIG #: </strong>14344</p>
      <p><strong>PHILHEALTH #: </strong>14344</p>
      <p><strong>SSS #: </strong>14344</p>
      <p><strong>TIN #: </strong>14344</p>
      <p><strong>NBI CLEARANCE: </strong>Provided</p>
      <p><strong>2316: </strong>To be follow</p>
      
    </div>
    <div class="col-md-6">
      <div class="col-md-6 no-padding">
        <p><strong>Date Hired: </strong></p>
        <p><?php echo formatDate(getUser()['join_date']);  ?></p>
      </div>
      <div class="col-md-6 no-padding">
        <p><strong>Evaluation Date: </strong></p>
        <p>May 25, 2016</p>
      </div>
    </div>
    
  </div>

</div>
<?php include('../includes/footer.php'); ?>