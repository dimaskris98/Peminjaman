
<body>        

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                   <div>Diajukan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('menukepala/index')?>">
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
                                    <i class="glyphicon glyphicon-ok fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                  
                                    <div>Disetujui</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('menukepala/disetujui'); ?>">
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
                                    <i class="glyphicon glyphicon-remove fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                    <div>Ditolak</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('menukepala/ditolak')?>">
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
                                    <i class="glyphicon glyphicon-edit fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                    <div>Semua</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('menukepala/semua') ?>">
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $mode; ?>
						</div>
						
                        
        </body>
</html>