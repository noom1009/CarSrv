<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo $this->lang->line('lang_application_name');?></title>
        <link id="page_favicon" href="favicon.ico" rel="icon" type="image/x-icon" />
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
        <![endif]-->
   
    </head>

    <body class="no-skin">
           <?php include 'topmenu.php';?>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                </script>



         <?php include 'meun.php';?>
       <!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active"><?php echo 'แผนงาน';?></li>
                        </ul><!-- /.breadcrumb -->
                         <a herf=""></a>
                        <div class="nav-search" id="nav-search">
                            <a href="?lang=en" data-target="en"><img src="<?php echo base_url();?>images/en.png"></a> | <a href="?lang=local" data-target="th"><img src="<?php echo base_url();?>images/th.png"></a>
                        </div><!-- /.nav-search -->
                    </div>

                    <div class="page-content">
               
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="timeline">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                            <div class="timeline-container timeline-style2">
                                                <span class="timeline-label">
                                                    <b>Today</b>
                                                </span>

                                                <div class="timeline-items">
                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">11:15 pm</span>

                                                            <i class="timeline-indicator btn btn-info no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    <span class="bigger-110">
                                                                        <a href="#" class="purple bolder">Susan</a>
                                                                        reviewed a product
                                                                    </span>

                                                                    <br />
                                                                    <i class="ace-icon fa fa-hand-o-right grey bigger-125"></i>
                                                                    <a href="#">Click to read &hellip;</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">12:30 pm</span>

                                                            <i class="timeline-indicator btn btn-info no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    Going to
                                                                    <span class="green bolder">veg cafe</span>
                                                                    for lunch
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">11:15 pm</span>

                                                            <i class="timeline-indicator btn btn-info no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    Designed a new logo for our website. Would appreciate feedback.
                                                                    <a href="#">
                                                                        Click to see
                                                                        <i class="ace-icon fa fa-search-plus blue bigger-110"></i>
                                                                    </a>

                                                                    <div class="space-2"></div>

                                                                    <div class="action-buttons">
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-heart red bigger-125"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-facebook blue bigger-125"></i>
                                                                        </a>

                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-reply light-green bigger-130"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-info no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding"> Took the final exam. Phew! </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.timeline-items -->
                                            </div><!-- /.timeline-container -->

                                            <div class="timeline-container timeline-style2">
                                                <span class="timeline-label">
                                                    <b>Yesterday</b>
                                                </span>

                                                <div class="timeline-items">
                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-success no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    <div class="clearfix">
                                                                        <div class="pull-left">
                                                                            <span class="orange2 bolder">Haloween party</span>

                                                                            Lots of fun at Haloween party.
                                                                            <br />
                                                                            Take a look at some pics:
                                                                        </div>

                                                                        <div class="pull-right">
                                                                            <i class="ace-icon fa fa-chevron-left blue bigger-110"></i>

                                                                            &nbsp;
                                                                            <img alt="Image 4" width="36" src="<?php echo base_url();?>assets/images/gallery/thumb-4.jpg" />
                                                                            <img alt="Image 3" width="36" src="<?php echo base_url();?>assets/images/gallery/thumb-3.jpg" />
                                                                            <img alt="Image 2" width="36" src="<?php echo base_url();?>assets/images/gallery/thumb-2.jpg" />
                                                                            <img alt="Image 1" width="36" src="<?php echo base_url();?>assets/images/gallery/thumb-1.jpg" />
                                                                            &nbsp;
                                                                            <i class="ace-icon fa fa-chevron-right blue bigger-110"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-success no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                                    <span class="pink2 bolder">high life</span>
                                                                    accusamus terry richardson ad squid &hellip;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-success no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding"> Going to cafe for lunch </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-success no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    <span class="red bolder">Critical security patch released</span>

                                                                    <br />
                                                                    Please download the new patch for maximum security.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.timeline-items -->
                                            </div><!-- /.timeline-container -->

                                            <div class="timeline-container timeline-style2">
                                                <span class="timeline-label">
                                                    <b>May 17</b>
                                                </span>

                                                <div class="timeline-items">
                                                    <div class="timeline-item clearfix">
                                                        <div class="timeline-info">
                                                            <span class="timeline-date">9:00 am</span>

                                                            <i class="timeline-indicator btn btn-grey no-hover"></i>
                                                        </div>

                                                        <div class="widget-box transparent">
                                                            <div class="widget-body">
                                                                <div class="widget-main no-padding">
                                                                    <span class="bolder blue">Lorum Ipsum</span>
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod
                                                                    <span class="purple bolder">high life</span>
                                                                    accusamus terry richardson ad squid &hellip;
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.timeline-items -->
                                            </div><!-- /.timeline-container -->
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div>
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                         <span class="bigger-120">
                            <span class="blue bolder"><?php echo $copyright;?></span>
                            <?php echo $copyright_author;?> &copy; <?php echo $copyright_date;?>ความเร็วเปิดหน้าจอ <strong>{elapsed_time}</strong> วินาที่
                        </span>

                        &nbsp; &nbsp;
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

            <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/jquery.nestable.min.js"></script>
            <!-- page specific plugin scripts -->
        <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plugins/fastclick/fastclick.js"></script>
 

    </body>
</html>
