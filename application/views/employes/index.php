     
  <table class="table">
    <thead>
      <tr>
        <th>Company ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($employes as $employe): ?>
      <tr>
        <td><?php echo $employe['company_id']; ?></td>
        <td><?php echo $employe['name']; ?></td>
        <td><?php echo $employe['email']; ?></td>
        <td><?php echo $employe['role']; ?></td>
        <td>₹ <?php echo $employe['salary']; ?></td>
        <td><a href="<?php echo base_url(); ?>employes/edit/<?php echo $employe['id']; ?>" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url(); ?>employes/delete/<?php echo $employe['id']; ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
