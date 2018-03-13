<?php echo validation_errors(); ?>
<?php echo form_open('appsettings/edit'); ?>
<?php if($app_info): ?>
<?php foreach($app_info as $app_info): ?>
  <div class="form-group">
    <label>Logo</label>
    <input type="text" name="app_logo" class="form-control" value="<?php echo $app_info['app_logo']; ?>" >

  </div>
  <div class="form-group">
    <label >App Name</label>
    <input type="text" name="app_name" class="form-control" value="<?php echo $app_info['app_name']; ?>" >
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php endforeach; ?>
<?php endif; ?>
</form>