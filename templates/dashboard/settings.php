<?php include('../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="settings.php">Account</a></li>
        <li role="presentation"><a href="update_profile.php">Profile</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Account Information</h3>
          <hr>
          <label>Employee ID:</label>
          <p class="form-control" disabled><?php echo getUser()['employee_id'] ?></p>
          <hr>
          <h4>Change Password</h4>

          <form method="POST" action="reset_login_password.php">
            <div class="form-group">
              <label for="current_password">Current Password</label>
              <input type="password" class="form-control" name="current_password" placeholder="Current Password">
            </div>
            <div class="form-group">
              <label for="new_password">New Password</label>
              <input type="password" class="form-control" name="new_password" placeholder="New Password">
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-default" name="submit_button">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../includes/footer.php'); ?>