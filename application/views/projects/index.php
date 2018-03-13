
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" width="150px">Project Name</th>
      <th scope="col">Discription</th>
      <th scope="col" width="150px">Snapshot</th>
    </tr>
  </thead>
  <tbody>   
<?php if($projects): ?>
  <?php foreach($projects as $project): ?>
    <tr>
      <td><a href="<?php echo base_url(); ?>projects/view/<?php echo $project['id']; ?> "><strong><?php echo ucwords($project['name']); ?></strong></a></td>
      <td class="text-justify"><?php echo word_limiter( $project['body'],45); ?></td>
    </tr>
  
  <?php endforeach; ?>

<?php endif; ?>
</tbody>
</table>