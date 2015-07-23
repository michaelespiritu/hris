<div class="table-responsive">
  <?php if(count($pendings)): ?>
  	<table class="table table-bordered table-hover">
        <tr class="text-center">
          	<td>Status</td>
      			<td>Leave Type</td>
      			<td>Start Date</td>
      			<td>End Date</td>
      			<td colspan="2">Message</td>
        </tr>

        <?php foreach ($pendings as $info ): ?>
        <tr class="
          <?php if($info->approve == 0): ?>
            
          <?php elseif ($info->approve == 1): ?>
            success
          <?php elseif ($info->approve == 2): ?>
            danger
          <?php endif; ?>
        ">
        	<td class="text-center">
            <span class="
              <?php if($info->approve == 0): ?>
                glyphicon glyphicon-time
              <?php elseif ($info->approve == 1): ?>
                glyphicon glyphicon-ok
              <?php elseif ($info->approve == 2): ?>
                glyphicon glyphicon-remove
              <?php endif; ?>
              ">
            </span>
          </td>
        	<td><?php echo $info -> leave_type ?></td>
        	<td><?php echo formatDate($info -> start_date) ?></td>
        	<td><?php echo formatDate($info -> end_date) ?></td>
        	<td><button type="button" class="btn btn-default col-md-12" data-toggle="modal" data-target="#message-<?php echo $info->id ?>">Read</button></td>
        	<td><button type="button" class="btn btn-default col-md-12" <?php if($info->approve != 0): ?>data-toggle="modal" data-target="#message-admin-<?php echo $info->id ?>" <?php endif; ?>>Admin Message</button></td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="message-<?php echo $info->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Leave</h4>
              </div>
              <div class="modal-body clearfix">
                <div class="col-md-12">
                  <?php echo $info->comment ?>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- admin message -->
        <div class="modal fade" id="message-admin-<?php echo $info->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Leave</h4>
              </div>
              <div class="modal-body clearfix">
                <div class="col-md-12">
                  <?php echo $info->admin_comment ?>
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
  <?php else: ?>

      <h3 class="text-center">No Leave Request.</h3>
  
  <?php endif; ?>
</div>