<div class="table-responsive">
    <?php if(count($pendingsadmin)): ?>
      	<table class="table table-bordered table-hover">
            <tr class="text-center">
        			<td>Name</td>
              <td>Leave Type</td>
        			<td>Start Date</td>
        			<td>End Date</td>
        			<td></td>
            </tr>
            
            <?php foreach ($pendingsadmin as $info ): ?>
                <tr>
                  <td><?php echo outputVariable($info -> first_name) ?>, <?php echo outputVariable($info -> first_name) ?></td>
                	<td><?php echo $info -> leave_type ?></td>
                	<td><?php echo formatDate($info -> start_date) ?></td>
                	<td><?php echo formatDate($info -> end_date) ?></td>
                	<td><a href="approve-decline-leave.php?leave=<?php echo $info->id ?>" class="btn btn-default col-md-12">Option</a></td>
                </tr>
            <?php endforeach; ?>
            
        </table>
    <?php else: ?>

        <h3 class="text-center">No Leave Request.</h3>
    
    <?php endif; ?>
</div>