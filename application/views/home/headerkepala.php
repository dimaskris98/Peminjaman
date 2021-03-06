
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
                
               <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="<?php echo base_url()?>home/index"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
				</div>
            <!-- /.navbar-header -->
<!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation" style="margin-top : 0px">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                               
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <li><a href="<?php echo base_url()?>menukepala/index"><i class="fa fa-dashboard fa-fw"></i>Pengajuan</a>
                        </li>
						<li>
                            <li><a href="<?php echo base_url()?>menukepala/info"><i class="fa fa-table fa-fw"></i>Info Jadwal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <li><a href="<?php echo base_url()?>masterkepala/index">Data Pengguna</a>
                                </li>
                                <li>
                                    <li><a href="<?php echo base_url()?>petugaskepala/index">Data Petugas</a>
                                </li>
								<li>
                                     <li><a href="<?php echo base_url()?>gedungkepala/index">Data Gedung</a>
                                </li>
								<li>
                                    <li><a href="<?php echo base_url()?>fasilitaskepala/index">Data Fasilitas</a>
                                </li>
                            </ul>  
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url()?>menukepala/laporan"><i class="fa fa-edit fa-fw"></i>Laporan</a>
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
