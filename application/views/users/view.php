
<div class="panel-heading">
        <h3 class="panel-title"><?php if($this->session->flashdata('edited')):
                                echo $this->session->flashdata('edited');
                        endif; ?></h3>
    </div>
 <div class="row">
    <div class="col-lg-2">
    <ul class="list-group">
      <li class="list-group-item">First Name:</li>
      <li class="list-group-item">Last Name : </li>
      <li class="list-group-item">User Name :</li>
      <li class="list-group-item">Email :</li>
    </ul></div>
    <div class="col-lg-10">

    <ul class="list-group">
      <li class="list-group-item"><?php echo $user_info['first_name']; ?></li>
      <li class="list-group-item"><?php echo $user_info['last_name']; ?></li>
      <li class="list-group-item"><?php echo $user_info['username']; ?></li>
      <li class="list-group-item"><?php echo $user_info['email']; ?></li>
    </ul></div>
</div>