<?php include('../includes/header.php'); ?>

<div class="row background-white padding-15">
  <?php displayMessage(); ?>
  <h3 class="text-center">Employee Registration</h3>
  <hr>
  <form class="form-label-bold" method="POST" action="registration.php">
    <div class="form-group">
      <label for="first_name">Employee ID*</label>
      <input type="text" class="form-control" name="employee_id" placeholder="Employee ID">
    </div>
    <div class="form-group">
      <label for="first_name">First Name*</label>
      <input type="text" class="form-control" name="first_name" placeholder="First Name">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name*</label>
      <input type="text" class="form-control" name="last_name" placeholder="Last Name">
    </div>
    <div class="form-group">
      <label for="email">Email address*</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="address">Address*</label>
      <input type="address" class="form-control" name="address" placeholder="Address">
    </div>
    <div class="form-group">
      <label for="contact_number">Contact Number*</label>
      <input type="contact_number" class="form-control" name="contact_number" placeholder="Contact Number">
    </div>
    <div class="form-group">
      <label for="role">Choose Role*</label>
      <select class="form-control" name="role">
        <option></option>
        <option>Admin</option>
        <option>Employee</option>
      </select>
    </div>
    <div class="form-group text-right">
      <button type="submit" class="btn btn-default " name="register">Submit</button>
    </div>
  </form>
</div>

<?php include('../includes/footer.php'); ?>