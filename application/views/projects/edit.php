
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('projects/edit'); ?>
<input type="hidden" name="id" value="<?php echo $project['id']; ?>">
  <div class="form-group">
    <label>Projects Name</label>
    <input type="text" name="name" value="<?php echo $project['name']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Project Name">
  </div>
  <div class="form-group">
    <label>Projects Discriptions</label>
    <textarea class="form-control" name="body" cols="100" id="editor" rows="8"><?php echo $project['body']; ?> </textarea>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
</form>