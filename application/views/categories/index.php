
<div class="col-xs-9">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Discription</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($categories as $category ): ?>
    <tr>
      <td><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a></td>
      <td class="text-justify"><?php echo $category['body']; ?></td>
      <td><?php if($this->session->userdata('user_id' ) == $category['user_id']): ?>
       <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
             <input type="submit" class="btn-link text-danger" value="[ X ]">
          </form>
    <?php endif; ?>
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<div class="col-xs-3">
<?php if($this->session->userdata('logged_in')): ?>
<a href="<?php echo  base_url();?>categories/create" class="btn btn-primary">Add Category</a>
<?php endif; ?>
</div>
