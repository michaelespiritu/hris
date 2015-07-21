<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="course.php">Details</a></li>
        <li role="presentation" ><a href="create_course.php">Course</a></li>
        <li role="presentation"><a href="create_subject.php">Subject</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Available Course</h3>
          <hr>
          <?php if(!empty($courses)): ?>
          <?php else: ?>
          	<h4 class="text-center">Available Course</h4>	
          	<p class="text-center"><a href="create_course.php" class="btn btn-info"><small>Create One</small></a></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>