<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Registation</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>assets/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign UP</h3>
                        </div>
                        <div class="panel-body">
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open_multipart('users/register'); ?>
                                    <hr class="colorgraph">
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                                      <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" tabindex="3">
                                    </div>
                                    <div class="form-group">
                                      <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                                        </div>
                                      </div>
                                   </div>
                                    <hr class="colorgraph">
                                    <div class="row">
                                      <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                      <div class="col-xs-12 col-md-6"><a href="<?php echo base_url(); ?>" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                                    </div>
                                  </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/js/startmin.js"></script>

    </body>
</html>