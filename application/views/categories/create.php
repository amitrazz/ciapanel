
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('categories/create'); ?>
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" name="name" class="form-control" placeholder="Category Name">

  </div>
  <div class="form-group">
    <label>Discription</label>
    <textarea type="text" name="body" class="form-control" placeholder="Discription" id="editor" cols="30" rows="10"></textarea>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>