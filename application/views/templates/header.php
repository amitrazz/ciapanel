<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/css/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
        <?php  if($app_info): ?>
        <?php foreach($app_info as $info): ?>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo ucfirst($info['app_logo']); ?></a>
    <?php endforeach; ?>
    <?php endif; ?>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw"></i> 
            <?php  if($app_info): ?>
        <?php foreach($app_info as $info): ?>
        <?php echo ucwords($info['app_name']); ?>
        <?php endforeach; ?>
    <?php endif; ?>
            </a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Hello 
                    <?php
                        $name = $this->session->userdata('username');
                        echo $name;
                     ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url(); ?>users/views"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>appsettings/edit"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>home" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-rss-square fa-fw"></i> Posts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>posts">All Posts</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>posts/create">add New</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>categories">Categories</a>
                            </li>

                        </ul>
                            
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-file-powerpoint-o fa-fw"></i> Project<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>projects">All Projects</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>projects/create">Add New</a>
                            </li>

                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="active"><i class="fa fa-tasks fa-fw"></i> Task<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>tasks">All Task</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>tasks/create">Add new</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-user fa-fw"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>users/index">All Users</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>users/views">Profile View</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>users/edit">Profile edit</a>
                            </li>

                        </ul>
                    <li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-briefcase fa-fw"></i> Employes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>employes/index">All Employes</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>employes/add">Add Employes</a>
                            </li>

                        </ul>
                    <li>
                        <a href="#"><i class="fa fa-info-circle fa-fw"></i> More Info<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url(); ?>about">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>contact">Contact US</a>
                            </li>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= $title; ?></h1>
    </div>
</div>
            <!-- ... Your content goes here ... -->
