<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
      <ul class="nav nav-tabs">
        <a href="my_leave.php" class="btn btn-default col-md-12">Back</a>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Pending Leave Request of <?php echo $pendingadmin->last_name;?>, <?php echo $pendingadmin->first_name;?></h3>
          <hr>
          <div class="well">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                  <tr class="text-center">
                      <td style="width:50%"><h5>Leave Type</h5></td>
                      <td style="width:50%"><?php echo $pendingadmin->leave_type;?></td>
                  </tr>
                  <tr class="text-center">
                      <td style="width:50%"><h5>Start Date</h5></td>
                      <td style="width:50%"><?php echo $pendingadmin->start_date;?></td>
                  </tr>
                  <tr class="text-center">
                      <td style="width:50%"><h5>End Date</h5></td>
                      <td style="width:50%"><?php echo $pendingadmin->end_date;?></td>
                  </tr>
                  <tr class="text-center">
                      <td style="width:50%"><h5>Message</h5></td>
                      <td style="width:50%"><?php echo $pendingadmin->comment;?></td>
                  </tr>
              </table>
            </div><!-- /.table-responsive -->
          </div>
          <div class="well">
            <form method="POST" action="approve-decline-leave.php">
              <input type="hidden" name="message_id" value="<?php echo $pendingadmin->id ?>">
              <div class="form-group">
                <label for="leave_type">Choose:</label>
                <select class="form-control required-form" name="accept">
                  <option></option>
                  <option value="1">Accept</option>
                  <option value="2">Declne</option>
                </select>
              </div>
              <div class="form-group">
                <label for="leave_type">Note</label>
                <textarea class="form-control required-form" rows="3" name="body_message"></textarea>
              </div>
              <button type="submit" class="btn btn-default" name="leave_submit" id="form-required">Submit</button>
            </form>
          </div>  
        </div>
        
      </div><!-- settings-tab -->
    </div><!-- /.padding-15 -->    
  </div><!-- col-md-12 no-padding -->
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>