<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation"><a href="leave.php">Request</a></li>
        <li role="presentation"><a href="my_leave.php"><?php echo ($profile->role == 1) ? 'Leave Request' : 'My Leave'; ?></a></li>

      <li role="presentation" class="active"><a href="all_leave.php">All Leave</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">All Leave</h3>
          <hr>
          <div id='calendar'></div>
        </div>
        
      </div><!-- settings-tab -->
    </div><!-- /.padding-15 -->    
  </div><!-- col-md-12 no-padding -->
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>