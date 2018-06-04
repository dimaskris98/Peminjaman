<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bootsrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/bootstrap/dist/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		
            <div id="logo">
				<img src="<?php echo base_url(); ?>assets/images/logo-politeknik-negeri-jember.png" width="80" height="80" style="margin: 10px;">
                <a class="navbar-brand kiri" style="font-size:25px">Peminjaman Gedung Politeknik Negeri Jember</a>
			<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>aden</strong>
                                    <span class="pull-right text-muted">
                                        <em>kamis</em>
                                    </span>
                                </div>
                                <div>nyelang gedung gawe turu</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>faqeh</strong>
                                    <span class="pull-right text-muted">
                                        <em>wingi</em>
                                    </span>
                                </div>
                                <div>gawe mabar</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>ncis</strong>
                                    <span class="pull-right text-muted">
                                        <em>winginane</em>
                                    </span>
                                </div>
                                <div>gawe ngising</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>home/index"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
				</div>
            <!-- /.navbar-header -->
<!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <li><a href="<?php echo base_url()?>menu/index"><i class="fa fa-dashboard fa-fw"></i>Pengajuan</a>
                        </li>
						<li>
                            <li><a href="<?php echo base_url()?>menu/info"><i class="fa fa-table fa-fw"></i>Info Jadwal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <li><a href="<?php echo base_url()?>master/index">Data Pengguna</a>
                                </li>
                                <li>
                                    <li><a href="<?php echo base_url()?>petugas/index">Data Petugas</a>
                                </li>
								<li>
                                     <li><a href="<?php echo base_url()?>gedung/index">Data Gedung</a>
                                </li>
								<li>
                                    <li><a href="<?php echo base_url()?>fasilitas/index">Data Fasilitas</a>
                                </li>
                            </ul>  
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url()?>menu/laporan"><i class="fa fa-edit fa-fw"></i>Laporan</a>
                        </li>
                        
        </nav>
		<div id="page-wrapper">

                
        
            
<!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
