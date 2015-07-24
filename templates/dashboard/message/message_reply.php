<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Reply to: <?php echo outputVariable($messagereply->message_title) ?></h3>
          <hr>
          <div class="col-md-12 no-padding">
            <form method="POST" action="message_reply.php?message=<?php echo $_GET['message'] ?>">
              <div class="form-group">
                <label for="recipient">To: <?php echo outputVariable($messagereply->last_name) ?>, <?php echo outputVariable($messagereply->first_name) ?></label>

                <input type="hidden" class="form-control required-form" name="recipient" value="<?php echo $messagereply->message_from_id ?>">
                <input type="hidden" class="form-control required-form" name="reply" value="<?php echo '1' ?>">
              </div>
              <div class="form-group">
                <label for="body_message">Title: RE: <?php echo outputVariable($messagereply->message_title) ?></label>
                <input type="hidden" class="form-control required-form" name="title_message" value="<?php echo $messagereply->message_title ?>">
              </div><div class="form-group">
                <label for="body_message">Message</label>
                <textarea class="form-control" rows="3" name="body_message">
                  

                
                <p>>> On <?php echo outputVariable(formatDateTime($messagereply->date_sent)) ?> <span><?php echo outputVariable($messagereply->last_name) ?>, <?php echo outputVariable($messagereply->first_name) ?> wrote:</span></p>
                <?php echo outputVariable($messagereply->message_body) ?>
                </textarea>
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