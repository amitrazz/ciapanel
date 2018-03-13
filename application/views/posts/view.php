
<small class="post-date">Posted On <?php echo $post['created_on']; ?> </small>
<div class="text-center">
  <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="img-thumbnail">
</div>
<div class="post-body">
  <?php echo $post['body']; ?>
</div>
<?php if($this->session->userdata('user_id' ) == $post['user_id']): ?>
<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-default pull-left">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" value="Delete" class="btn btn-danger" >
</form>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
  <?php foreach($comments as $comment): ?> 
    <div class="well">
    <h4><?php echo $comment['body']; ?> [By <strong><?php echo $comment['name']; ?></strong>]</h4>
    </div>
  <?php endforeach; ?>
<?php else: ?>
<p>No Comments To display!</p>
<?php endif; ?>
<hr>
<h3>Add Comments</h3>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('comments/create/'.$post['id']); ?>
  <div class="form-group">
    <label>Your Name</label>
    <input type="text" name="name" class="form-control" placeholder="your Name">
  </div>
  <div class="form-group">
    <label>Your Email</label>
    <input type="text" name="email" class="form-control" placeholder="your Email">
  </div>
  <div class="form-group">
    <label>Comment</label>
   <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
  </div>
  <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>" >
  <button type="submit" class="btn btn-primary">Submit</button>
</form>