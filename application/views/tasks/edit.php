
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('tasks/edit'); ?>

<?php if($tasks): ?>
  <?php foreach($tasks as $task): ?>
  <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
<div class="form-row">
<div class="form-group col-md-4">
<label for="exampleFormControlInput1">Task Name</label>
<input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="<?php echo $task['name']; ?>">
</div>
<div class="form-group col-md-4">
<label >Project name</label>
<select  name="project_name" class="form-control" disabled >
  <option value="<?php echo $task['project_name']; ?>"><?php echo $task['project_name']; ?></option>    
</select>
</div>
<div class="form-group col-md-4">
<label for="exampleFormControlInput1">Due Date</label>
<input type="date" name="due_date" value="<?php echo $task['due_date']; ?>" class="form-control" id="exampleFormControlInput1">
</div>
</div>
<div class="form-group">
<label for="exampleFormControlTextarea1">Discriptions</label>
<textarea class="form-control" name="body" id="editor" rows="5"><?php echo $task['body']; ?></textarea>
</div>

<button type="submit" value="submit" class="btn btn-primary">Submit</button>
<?php endforeach; ?>
<?php endif; ?>
</form>