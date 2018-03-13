
<?php if($this->session->userdata('loged_in')): ?>
<a href="<?php echo base_url();?>posts/create" class="btn btn-primary pull-right">Add Post</a>
<?php endif; ?>
<?php foreach($posts as $post): ?>
      <h2><?php echo ucwords($post['title']); ?></h2>
<div class="row">
  <div class="col-xs-3">
      <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image'] ?>" class="img-thumbnail">
  </div>
  <div class="col-xs-9" style="text-align:justify">
    <small class="post-date">Posted On <?php echo $post['created_on']; ?> In <strong><?php echo $post['name']; ?></strong></small><br>
      <?php  echo word_limiter($post['body'],70); ?>
      <br>
      <p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
      
  </div>
</div>
<?php endforeach; ?>
<div class="pagination-link">
  <?php  echo $this->pagination->create_links(); ?>
</div>