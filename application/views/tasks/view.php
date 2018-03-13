
<ul class="list-group">

<?php if($tasks): ?>
  <?php foreach($tasks as $task): ?>
    <li class="list-group-item"><h5> Task Name <strong><?php echo ucfirst($task['name']); ?></strong></h5></li>
    <li class="list-group-item"><h5> Project Name <strong><?php echo ucfirst($task['project_name']); ?></strong></h5></li>
    <li class="list-group-item">Created at <strong> <?php echo $task['due_date']; ?></strong></li>
    <li class="list-group-item">Due Date <strong> <?php echo $task['due_date']; ?></strong></li>
    <li class="list-group-item"><?php echo $task['body']; ?></li>
  <?php endforeach; ?>
<?php endif; ?>
</ul>
<hr>
<?php if($this->session->userdata('user_id' ) == $task['user_id']): ?>
  <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task['id']; ?>" class="btn btn-default pull-left">Edit</a>
  <?php echo form_open('/tasks/delete/'.$task['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger" >
  </form>
<?php endif; ?>


    
  