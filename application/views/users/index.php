
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" width="150px">UserName</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>   
<?php if($users): ?>
  <?php foreach($users as $user): ?>
    <tr>
      <td><strong><?php echo ucwords($user['username']); ?></strong></a></td>
      <td class="text-justify"><?php echo $user['first_name']; ?></td>
      <td class="text-justify"><?php echo $user['last_name']; ?></td>
      <td class="text-justify"><?php echo $user['email']; ?></td>
    </tr>
  
  <?php endforeach; ?>

<?php endif; ?>
</tbody>
</table>