
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('tasks/create'); ?>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Task Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Task Name">
    </div>
    <div class="form-group col-md-4">
    <label >Project name</label>
    <select  name="project_name" class="form-control" >
    <?php foreach($projects as $project): ?>
      <option value="<?php echo $project['name']; ?>"><?php echo $project['name']; ?></option>
    <?php endforeach; ?>     
    </select>
    </div>
    <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Due Date</label>
    <input type="date" name="due_date" class="form-control" id="exampleFormControlInput1">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Discriptions</label>
    <textarea class="form-control" name="body" id="editor" rows="5"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>