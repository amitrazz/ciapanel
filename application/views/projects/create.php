
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('projects/create'); ?>
  <div class="form-group">
    <label>Projects Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Project Name">
  </div>
  <div class="form-group">
  <label>Project Discription</label>
  <textarea type="text" name="body" class="form-control" placeholder="Project Discription" id="editor" cols="30" rows="10"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>