<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation" ><a href="course.php">Details</a></li>
        <li role="presentation" class="active"><a href="create_course.php">Course</a></li>
        <li role="presentation"><a href="create_subject.php">Subject</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Create Course</h3>
          <hr>
          <form method="POST" action="create_course.php">
            <div class="form-group">
              <label for="first_name">Course Code</label>
              <input type="first_name" class="form-control" name="course_code" placeholder="Course Code">
            </div>
            <div class="form-group">
              <label for="first_name">Course Name</label>
              <input type="first_name" class="form-control" name="course_name" placeholder="Course Name">
            </div>
            <div class="text-right">
              <button type="submit" name="create_btn" class="btn btn-default">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>