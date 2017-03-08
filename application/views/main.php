<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>สถาบันบริหารจัดการธนาคารที่ดิน (องค์การมหาชน)</title>
		<link href="<?php echo base_url(); ?>assets/css/style.default.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/select2.css" rel="stylesheet" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<div class="headerwrapper">
				<div class="header-left">
					<div class="pull-right">
						<a href="#" class="menu-collapse"><i class="fa fa-bars"></i></a>
                    </div>
				</div><!-- header-left -->
				<div class="header-right">
					<div class="pull-right">
						<div class="btn-group btn-group-list btn-group-notification">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="badge">5</span>
							</button>							
							<div class="dropdown-menu pull-right">
								<?php $this->load->view('header-notify');?>
							</div><!-- dropdown-menu -->
						</div><!-- btn-group -->
						<div class="btn-group btn-group-option">
								<?php $this->load->view('header-user');?>
						</div><!-- btn-group -->
					</div><!-- pull-right -->
				</div><!-- header-right -->
			</div><!-- headerwrapper -->
		</header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <?php $this->load->view('panel-profile');?>
                    </div><!-- media -->
                    
                    <?php $this->load->view('panel-menu');?>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <?php $this->load->view('panel-breadcrumb');?>
                                <h4>{title}</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        {content}
                        
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/retina.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.cookies.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    </body>
</html>