
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-rss fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $posts_count; ?></div>
                            <div>All Posts!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>posts">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-product-hunt fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $projects_count; ?></div>
                            <div>All Projects!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>projects">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $tasks_count; ?></div>
                            <div>Assigned Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>tasks">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $users_count; ?></div>
                            <div>users!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>/users/index">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">        
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-rss-o fa-fw"></i> <h3 class="text-center">MY Projects</h3>
                    </div>
                    <hr>
                    <div class="panel-body">
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Discription</th>
                                <th scope="col">created</th>
                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php if($projects): ?>
                                    <?php foreach($projects as $project): ?>
                                    <td><a href="<?php echo base_url(); ?>projects/view/<?php echo $project['id']; ?>"><?php echo $project['name']; ?></a></td>
                                    <td><?php echo word_limiter($project['body'],20); ?><a href="<?php echo base_url(); ?>projects/view/<?php echo $project['id']; ?>">Show Project</a></td>
                                    <td><?php echo $project['created']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
        
                </div>
                <!-- /.panel-heading -->
                
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Latest Post
                </div>
                <!-- /.panel-heading -->
                
                <div class="panel-body">
                <hr>
                <?php if($posts): ?>
              <?php foreach($posts as $post): ?>
              <div class="text-center">
                  <h4> <?php echo $post['title']; ?> <small>Posted On <?php echo $post['created_on']; ?> </small></h4>
              </div>
                
                    <div class="text-center">
                    <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="post-body">
                    <?php echo word_limiter( $post['body'],50); ?><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
                    </div>
                    <hr>
                    <?php endforeach; ?>
              <?php endif; ?>
                </div>
              
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-tasks fa-fw"></i> Task Assigned
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <?php if($tasks): ?>
              <?php foreach($tasks as $task): ?>
                    <div class="list-group">
                   
                        <a href="<?php echo base_url(); ?>tasks/view/<?php echo $task['id']; ?>" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i><?php echo $task['name']; ?>
                                <span class="pull-right text-muted small"><em> <?php echo $task['created']; ?></em>
                                </span>
                        </a>
                       
                    </div>
                    <?php endforeach; ?>
                  <?php endif; ?> 
                    <!-- /.list-group -->
                    <a href="<?php echo base_url(); ?>tasks" class="btn btn-default btn-block">View All Task</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Chat
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                data-toggle="dropdown">
                            <i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li>
                                <a href="#">
                                    <i class="fa fa-refresh fa-fw"></i> Refresh
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-circle fa-fw"></i> Available
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-times fa-fw"></i> Busy
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-clock-o fa-fw"></i> Away
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix">
                                <span class="chat-img pull-left">
                                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                            class="img-circle"/>
                                </span>

                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                <span class="chat-img pull-right">
                                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                            class="img-circle"/>
                                </span>

                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                    </small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix">
                                <span class="chat-img pull-left">
                                    <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                            class="img-circle"/>
                                </span>

                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong>
                                    <small class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                    </small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix">
                                <span class="chat-img pull-right">
                                    <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                            class="img-circle"/>
                                </span>

                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                    </small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                    ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm"
                                placeholder="Type your message here..."/>
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="btn-chat">
                                    Send
                                </button>
                            </span>
                    </div>
                </div>
                <!-- /.panel-footer -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>