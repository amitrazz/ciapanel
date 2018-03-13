
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Add title">

  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea cols="100" id="editor" name="body" class="form-control" placeholder="Add Content" ></textarea>
  </div>
  <div class="form-group">
    <label >Category</label>
    <select  name="categories_id" class="form-control" >
      <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        
<?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Upload Images</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>