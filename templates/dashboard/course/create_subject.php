<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 no-padding">
   
    <div class="padding-15">
       <ul class="nav nav-tabs">
        <li role="presentation" ><a href="course.php">Details</a></li>
        <li role="presentation"><a href="create_course.php">Course</a></li>
        <li role="presentation" class="active"><a href="create_subject.php">Subject</a></li>
      </ul>      
      <div class="settings-tab clearfix form-bold-label">
        <div class="col-md-12 padding-15">
          <h3 class="text-center">Create Subject</h3>
          <hr>
          <div class="text-right">
            <button class="btn btn-default" id="add_subject"><span class="glyphicon glyphicon-plus"></span></button>
          </div>
          <br>
          <form method="POST" action="create_subject.php" id="subject_form">
            <input type="hidden" name="total_count" value="1">    
            <div id="subject_box"> </div>
              <div class="well">
                <div id="txtHint"></div>
                <div class="form-group">
                  <label for="first_name">Subject Code</label>
                  <input type="text" class="form-control" name="subject_code_1" placeholder="Subject Code" onchange="getSubject(this.value)">
                </div>
                <div class="form-group">
                  <label for="first_name">Subject Name</label>
                  <input type="text" class="form-control" name="subject_name_1" placeholder="Subject Name">
                </div>
              </div>
            <div class="text-right">
              <button type="submit" name="create_btn" id="subject_create" class="btn btn-default">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.background-white -->
<?php include('../../includes/footer.php'); ?>