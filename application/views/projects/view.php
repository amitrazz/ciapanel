<h3><strong><?php echo ucfirst($project['name']); ?></strong></h3>
<small class="post-date">Created On <?php echo $project['created']; ?> </small>
<div class="post-body">
  <p class="text-justify"><?php echo $project['body']; ?></p>
</div>
<hr>
<?php if($this->session->userdata('user_id' ) == $project['user_id']): ?>

<a href="<?php echo base_url(); ?>projects/edit/<?php echo $project['id']; ?>"><button class="btn btn-primary">Edit</button></a>
<a href="<?php echo base_url(); ?>projects/delete/<?php echo $project['id']; ?>"><button class="btn btn-danger">delet</button></a>

<?php endif; ?>