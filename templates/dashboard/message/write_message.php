<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation"><a href="message.php">Inbox</a></li>
        <li role="presentation"><a href="iom.php">Sent</a></li>
        <li role="presentation" class="active"><a href="write_message.php">Write Message</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Write Message</h3>
          <hr>
          <div class="col-md-12 no-padding">
            <form method="POST" action="write_message.php">
              <div class="form-group">
                <label for="recipient">To:</label>
                <select class="form-control required-form" name="recipient">
                  <option></option>
                  <?php foreach ($employee as $info ) {
                    echo '<option value="'.$info->user_id.'">'.$info->last_name.', '.$info->first_name.'</option>';
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="body_message">Message</label>
                <textarea class="form-control required-form" rows="3" name="body_message"></textarea>
              </div>
              <button type="submit" class="btn btn-default" id="form-required" name="sent-btn">Send!</button>
            </form>
          </div>
        </div>
        
      </div><!-- settings-tab -->
    </div><!-- /.padding-15 -->    
  </div><!-- col-md-12 no-padding -->
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>