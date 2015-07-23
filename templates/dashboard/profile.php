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
        <h2><?php echo outputVariable($profile->first_name); ?> <?php echo outputVariable($profile->last_name); ?></h2>
        <h3><?php echo getUser()['employee_id'];  ?></h3>
      </div>
      <div class="col-md-6">
        <h3><a href="mailto:<?php echo $profile->email; ?>"><?php echo outputVariable($profile->email); ?></a></h3>
        <h3><a href="tel:<?php echo $profile->contact_number; ?>"><?php echo outputVariable($profile->contact_number); ?></a></h3>
      </div>  
      
      <div class="col-md-12">
        <p><?php echo ($profile->role == 1) ? 'Admin' : 'Employee';?></p>
        <hr>
        <p><strong>Address: </strong><?php echo outputVariable($profile->address); ?></p>
        
        <?php echo getIncaseOfEmergency($getEmergencyContact); ?>
      </div>
      </div>
    </div>

  </div><!-- Upper Header -->
</div>
<br>
<div class="row background-white padding-15">
 
  <?php echo date("F d, Y", strtotime(getUser()['join_date'])); ?><br>
  <?php echo date("F d, Y", strtotime(getUser()['join_date']."+ 6 months")); ?>

</div>
<?php include('../includes/footer.php'); ?>