<?php include('../../includes/header.php'); ?>
<div class="row background-white">
  <?php displayMessage(); ?>
  <div class="col-md-12 padding-15">
    <h3>Employee Search:</h3>
    <div class="form-group">
      <select class="form-control" onchange="showUser(this.value)">
        <option></option>
          <?php foreach ($employee as $info ) {
            echo '<option value="'.$info->user_id.'">'.$info->last_name.', '.$info->first_name.'</option>';
          } ?>
          </select>
      </div>
      <div id="txtHint">

      </div>
  </div>
</div>
<?php include('../../includes/footer.php'); ?>