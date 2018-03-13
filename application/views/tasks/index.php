
<table class="table">
  <thead>
    <tr>
      <th scope="col">Task Name</th>
      <th scope="col">Task Discriptions</th>
      <th scope="col">Created</th>
      <th scope="col">Due Date</th>
      <th scope="col">Project Name</th>
    </tr>
  </thead>
  <tbody>
  <?php if($tasks): ?>
    <?php foreach ($tasks as $task): ?>
    <tr>
      <td width="15%"><a href="<?php echo base_url(); ?>tasks/view/<?php echo $task['id']; ?>"><?php echo ucwords($task['name']); ?></a></td>
      <td class="text-justify" width="40%"><?php echo word_limiter($task['body'],20); ?><a href="<?php echo base_url(); ?>tasks/view/<?php echo $task['id']; ?>"><strong>View Task</strong></a></td>
      <td width="15%"><?php echo $task['created']; ?></td>
      <td width="15%"><?php echo $task['due_date']; ?></td>
      <td width="15%"><?php echo $task['project_name']; ?></td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
  </tbody>
</table>