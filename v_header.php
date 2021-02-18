<?php 
$lg = $this->session->userdata('site_lang'); //echo $lg;
if($lg=='thai'){
    $this->lang->load('content','thai');
}
elseif($lg=='english'){
    $this->lang->load('content','english');
}
$lang  = $lg;
//test
//echo $lang;

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>BSM Logistic</title>            
        <meta http-equiv="Content-Language" content="th" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- icon of software -->
         <!-- <link rel="shortcut icon" href="<?php echo site_url(); ?>images/logo/logo.png"> -->
         <!-- css -->     
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo site_url();?>bootstrap/css/theme-default.css?v=1001"/>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>bootstrap/css/custom-style.css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css?v=1001">
        <link href="<?php echo site_url().'/css/popup.css?v=1001';?>" rel="stylesheet">
       
        <link href="<?php echo site_url().'/plugin/page_style.css?v=1001';?>" rel="stylesheet">


        <link href='<?php echo site_url();?>css/fullcalendar.min.css' rel='stylesheet' />
        <link href='<?php echo site_url();?>css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        
         <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/jquery/jquery.min.js?v=1001"></script>
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/jquery/jquery-ui.min.js?v=1001"></script>
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/bootstrap/bootstrap.min.js?v=1001"></script>  

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <!-- END PLUGINS -->
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/bootstrap/bootstrap-select.js?v=1001"></script>
       <!-- <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/settings.js"></script> -->
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/moment.min.js?v=1001"></script> 
        
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins.js?v=1001"></script>        
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/actions.js?v=1001"></script>
        <script type='text/javascript' src='<?php echo site_url();?>bootstrap/js/plugins/icheck/icheck.min.js?v=1001'></script>  
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js?v=1001"></script>
        <script type="text/javascript" src="<?php echo site_url();?>bootstrap/js/plugins/scrolltotop/scrolltopcontrol.js?v=1001"></script>
        <!-- END TEMPLATE -->   
  
  
    </head>
   <style>
       img {
         margin-right: 3px;
       }
   </style> 
    <body >
    
    
     <div class="page-container page-navigation-toggled page-navigation-top-fixed page-navigation-toggled page-container-wide">
     <div class="page-container">
  
            <!-- START PAGE SIDEBAR -->
            <!-- slide menu on left -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation" >
                    <li class="xn-logo">
                        <a href="<?php echo site_url('homepage');?>" style="padding: 3px 0">
                            <img src="<?php echo site_url();?>images/logo/logo.png" alt="Logo" style="object-fit: cover;width: 140px;height: 40px;"/>
                        </a>
                         <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo site_url();?>images/logo/logo.png" alt="Logo" />
                        </a>
                                                                                  
                    </li>
                    <li  class="xn-openable">
                        <a href="#" title="Planner"><img src="<?php echo site_url();?>images/icon/calendar.png" alt="" style="width: 20px"><span class="xn-text">Planner</span></a>
                        <ul>
                         <li><a href="<?php echo site_url('planner') ?>" title="Overall" class="btn_load">Overall</a></li>
                         <li><a href="#" title="Not Deliveried" class="btn_load">Not Deliveried</a></li>
						 <li><a href="#" title="On-hold Deliveried" class="btn_load">On-hold Deliveried</a></li>
						
                        </ul>                    
                    </li> 
                    <li  class="xn-openable">
                        <a href="#" title="Callcenter"><img src="<?php echo site_url();?>images/icon/call-center-operator.png" alt="" style="width: 20px"><span class="xn-text">Callcenter</span></a>
                        <ul>
                         <li><a href="#" title="Overall" class="btn_load">Overall </a></li>
                         <li><a href="#" title="My Deliveries" class="btn_load">My Deliveries </a></li>
                        </ul>                    
                    </li> 
                    <li><a href="#" title="Product Manager" class="btn_load"><img src="<?php echo site_url();?>images/icon/management.png" alt="" style="width: 20px">Product Manager</a></li>
                    <li><a href="#" title="Zone Leader" class="btn_load"><img src="<?php echo site_url();?>images/icon/sign.png" alt="" style="width: 20px">Zone Leader</a></li> 
					<li  class="xn-openable">
                        <a href="#" title="Truck"><img src="<?php echo site_url();?>images/icon/cargo-truck.png" alt="" style="width: 20px"><span class="xn-text">Truck</span></a>
                        <ul>
                         <li><a href="#" title="Truck Management" class="btn_load">Truck Management</a></li>
                         <li><a href="#" title="Truck Type" class="btn_load">Truck Type</a></li>
                        
                        </ul>                    
                    </li> 
                    <li  class="xn-openable">
                        <a href="#" title="Product"><img src="<?php echo site_url();?>images/icon/box.png" alt="" style="width: 20px"><span class="xn-text">Product</span></a>
                        <ul>
                         <li><a href="#" title="Product Profiling" class="btn_load">Product Profiling</a></li>
                        </ul>                    
                    </li>
                    <li  class="xn-openable">
                        <a href="#" title="Admin"><img src="<?php echo site_url();?>images/icon/admin-with-cogwheels.png" alt="" style="width: 20px"><span class="xn-text">Admin</span></a>
                        <ul>
                         <li><a href="#" title="Zone Management" class="btn_load">Zone Management</a></li>
                        </ul>                    
                    </li>
                    <li><a href="#" title="Report" class="btn_load"><img src="<?php echo site_url();?>images/icon/analytics.png" alt="" style="width: 20px">Report</a></li> 
                  </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content  ">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel " >
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" id="menu" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                     <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" title="Logout" ><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- BTN CHANGE LANG -->
                     <li class="xn-icon-button pull-right">
                     
                        <a href="<?php echo site_url().'LanguageSwitcher/switchLang/thai';?>"  title="Change Language" style="cursor: pointer;" ><img src="<?php echo site_url();?>images/lang_icon/th.png" alt=""></a>  
                     
                      <!--   <a   href="<?php echo site_url().'LanguageSwitcher/switchLang/english';?>" ><img src="<?php echo site_url();?>images/lang_icon/en.png" alt="" ></a> -->
                      
                    </li>
                    <!-- END CHANGE -->
                     <!-- SEARCH -->
                    <li class="bar_name"  style="float: right;">
                         <a style="color: white"> (Welcome, )</a>
                    </li>   
                    <!-- END SEARCH -->
                    
                   
                   
                    
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
    
   <div class="modals"></div>

   