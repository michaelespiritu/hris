<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation"><a href="message.php">Inbox</a></li>
        <li role="presentation" class="active"><a href="sent.php">Sent</a></li>
        <li role="presentation"><a href="write_message.php">Write Message</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Sent Items</h3>
          <hr>
          <?php if(!empty($sent)): ?>
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <tr>
                  <td></td>
                  <td>To</td>
                  <td>Date</td>
                  <td>Options</td>
                </tr>

                  
                  <?php foreach($sent as $info): ?>
                  <tr>
                    <td class="text-center"><span class="<?php echo ($info->open == 0) ? 'glyphicon glyphicon-star' : 'glyphicon glyphicon-star-empty'; ?>" id="readmessage"></span></td>
                    <td><?php echo $info->last_name ?>, <?php echo $info->first_name ?></td>
                    <td><?php echo formatDateTime($info->date_sent) ?></td>
                    <td><button type="button" class="btn btn-default col-md-12" data-toggle="modal" data-target="#message-<?php echo $info->id ?>">Read</button></td>
                  </tr>

                  <!-- Modal -->
                  <div class="modal fade" id="message-<?php echo $info->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">To <?php echo $info->last_name ?>, <?php echo $info->first_name ?></h4>
                        </div>
                        <div class="modal-body clearfix">
                          <div class="col-md-12">
                            <?php echo $info->message_body ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                
              </table>
            </div>
          <?php else: ?>
            <h4 class="text-center">No Message Found.</h4> 
          <?php endif; ?>
        </div>
        
      </div><!-- settings-tab -->
    </div><!-- /.padding-15 -->    
  </div><!-- col-md-12 no-padding -->
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>