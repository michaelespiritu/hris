<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="leave.php">Request</a></li>
        <li role="presentation"><a href="my_leave.php"><?php echo ($profile->role == 1) ? 'Leave Request' : 'My Leave'; ?></a></li>
        <li role="presentation"><a href="all_leave.php">All Leave</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Leave Request</h3>
          <hr>
          <form method="POST" action="leave.php">
          <div class="form-group">
            <label for="leave_type">Leave Type</label>
            <select class="form-control required-form" name="leave_type">
              <option></option>
              <option value="Vacation Leave">Vacation Leave</option>
              <option value="Sick Leave">Sick Leave</option>
            </select>
          </div>
          <div class="form-group clearfix">
            <div class="col-md-5 no-padding clearfix">
              <label for="from">Start Date</label>
              <input type="text" class="form-control required-form" id="from" name="from">
            </div>
            <div class="col-md-2 no-padding clearfix"></div>
            <div class="col-md-5 no-padding clearfix">
              <label for="to">End Date</label>
              <input type="text" class="form-control required-form" id="to" name="to">
            </div>
          </div>
          <div class="form-group">
            <label for="leave_type">Note</label>
            <textarea class="form-control required-form" rows="3" name="body_message"></textarea>
          </div>
          <button type="submit" class="btn btn-default" name="leave_submit" id="form-required">Request</button>
        </form>
        </div>
        
      </div><!-- settings-tab -->
    </div><!-- /.padding-15 -->    
  </div><!-- col-md-12 no-padding -->
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>