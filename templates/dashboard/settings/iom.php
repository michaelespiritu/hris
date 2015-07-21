<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation"><a href="settings.php">Account</a></li>
        <li role="presentation"><a href="update_profile.php">Profile</a></li>
        <li role="presentation"  class="active"><a href="iom.php">IOM</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">In Case of Emergency Settings</h3>
          <hr>
          <form method="POST" action="iom.php">
            <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="first_name" class="form-control" name="first_name" placeholder="First Name" value="<?php echo outputVariable($profile->first_name) ?>">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="last_name" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo outputVariable($profile->last_name) ?>">
          </div>
          <div class="form-group">
            <label for="last_name">Relationship</label>
            <input type="last_name" class="form-control" name="relationship" placeholder="Relationship" value="<?php echo outputVariable($profile->relationship) ?>">
          </div>
          <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input type="contact_number" class="form-control" name="contact_number" placeholder="Contact Number" value="<?php echo outputVariable($profile->contact_number) ?>">
          </div>
            <div class="text-right">
              <button type="submit" name="update_submit" class="btn btn-default">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>