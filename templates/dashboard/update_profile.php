<?php include('../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation"><a href="settings.php">Account</a></li>
        <li role="presentation" class="active"><a href="update_profile.php">Profile</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Profile Information</h3>
          <hr>

          <form>
            <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="first_name" class="form-control" id="first_name" placeholder="First Name" value="<?php echo $profile->first_name ?>">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="last_name" class="form-control" id="last_name" placeholder="Last Name" value="<?php echo $profile->last_name ?>">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="address" class="form-control" id="address" placeholder="Address" value="<?php echo $profile->address ?>">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email" value="<?php  echo$profile->email ?>">
          </div>
          <div class="form-group">
            <label for="contact_number">Contact Number</label>
            <input type="contact_number" class="form-control" id="contact_number" placeholder="Contact Number" value="<?php echo $profile->contact_number ?>">
          </div>
            <div class="text-right">
              <button type="submit" class="btn btn-default">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../includes/footer.php'); ?>