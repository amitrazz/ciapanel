<div class="row">
    <div class="col-md-4 col-md-offset-4">

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('employes/add'); ?>
<div class="form-group">
    <label for="email">Employe ID:</label>
    <input type="text" name="company_id"class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" name="name" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Role:</label>
    <input type="text" name="role" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Salary:</label>
    <input type="text" name="salary" class="form-control" id="pwd">
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>