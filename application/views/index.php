<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Codeo - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
            
            <!-- Navbar -->
            <nav class="topbar-main">  
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="../projects/projects-index.html" class="logo">
                        <span>
                            <img src="assets/images/codeoku.png" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="assets/images/codeo.png" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div><!--topbar-left-->
                <!--end logo-->
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="hidden-sm">
                        <div class="crypto-balance">
                            <i class="dripicons-wallet text-muted align-self-center"></i>
                            <div class="btc-balance">                            
                                <h5 class="m-0">9.521.32 <span>CODEO</span></h5>
                                <span class="text-muted">Total Balance</span>
                            </div>
                        </div>
                    </li>         
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li><!--end li-->

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (18)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li><!--end notification-list-->

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user pr-0" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <!--<a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo site_url('dashboardHome/logout') ?>"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li><!--end dropdown-->
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li> <!--end menu item-->   
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">
                    <!--<li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>-->
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
             <!-- MENU Start -->
            <div class="navbar-custom-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="../projects/projects-index.html">
                                    <i class="dripicons-view-thumb"></i><span> Dashboard </span>
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="../ecommerce/ecommerce-index.html">
                                    <svg class="nav-svg" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <ellipse class="svg-primary" transform="matrix(0.9998 -1.842767e-02 1.842767e-02 0.9998 -7.7858 3.0205)" cx="160" cy="424" rx="24" ry="24"/>
                                            <ellipse class="svg-primary" transform="matrix(2.381651e-02 -0.9997 0.9997 2.381651e-02 -48.5107 798.282)" cx="384.5" cy="424" rx="24" ry="24"/>
                                            <path d="M463.8,132.2c-0.7-2.4-2.8-4-5.2-4.2L132.9,96.5c-2.8-0.3-6.2-2.1-7.5-4.7c-3.8-7.1-6.2-11.1-12.2-18.6
                                                c-7.7-9.4-22.2-9.1-48.8-9.3c-9-0.1-16.3,5.2-16.3,14.1c0,8.7,6.9,14.1,15.6,14.1c8.7,0,21.3,0.5,26,1.9c4.7,1.4,8.5,9.1,9.9,15.8
                                                c0,0.1,0,0.2,0.1,0.3c0.2,1.2,2,10.2,2,10.3l40,211.6c2.4,14.5,7.3,26.5,14.5,35.7c8.4,10.8,19.5,16.2,32.9,16.2h236.6
                                                c7.6,0,14.1-5.8,14.4-13.4c0.4-8-6-14.6-14-14.6H189h-0.1c-2,0-4.9,0-8.3-2.8c-3.5-3-8.3-9.9-11.5-26l-4.3-23.7
                                                c0-0.3,0.1-0.5,0.4-0.6l277.7-47c2.6-0.4,4.6-2.5,4.9-5.2l16-115.8C464,134,464,133.1,463.8,132.2z"/>
                                        </g>
                                    </svg>
                                    <span> Exchange </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="../ecommerce/ecommerce-index.html"><i class="dripicons-device-desktop"></i>Dashboard</a></li>
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->

                            <li class="has-submenu">
                                <a href="#">
                                    <svg class="nav-svg" version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <path class="svg-primary" d="M376,192h-24v-46.7c0-52.7-42-96.5-94.7-97.3c-53.4-0.7-97.3,42.8-97.3,96v48h-24c-22,0-40,18-40,40v192c0,22,18,40,40,40
                                                h240c22,0,40-18,40-40V232C416,210,398,192,376,192z M270,316.8v68.8c0,7.5-5.8,14-13.3,14.4c-8,0.4-14.7-6-14.7-14v-69.2
                                                c-11.5-5.6-19.1-17.8-17.9-31.7c1.4-15.5,14.1-27.9,29.6-29c18.7-1.3,34.3,13.5,34.3,31.9C288,300.7,280.7,311.6,270,316.8z
                                                    M324,192H188v-48c0-18.1,7.1-35.1,20-48s29.9-20,48-20s35.1,7.1,48,20s20,29.9,20,48V192z"/>
                                        </g>
                                    </svg>
                                    <span> Settings </span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="authentication/auth-login.html"><i class="dripicons-enter"></i>Log In</a></li>
                                    <li><a href="authentication/auth-register.html"><i class="dripicons-pencil"></i>Register</a></li>
                                    <li><a href="authentication/auth-recover-pw.html"><i class="dripicons-clockwise"></i>Recover Password</a></li>
                                    <!--<li><a href="authentication/auth-lock-screen.html"><i class="dripicons-lock"></i>Lock Screen</a></li>
                                    <li><a href="authentication/auth-404.html"><i class="dripicons-warning"></i>Error 404</a></li>
                                    <li><a href="authentication/auth-500.html"><i class="dripicons-wrong"></i>Error 500</a></li>-->
                                </ul>
                            </li><!--end has-submenu-->

                            <li class="has-submenu">
                                <a href="#" data-toggle="modal" data-target="#exampleModal">
                                    <span class="fa fa-database"></span>
                                    <span> Popup </span>
                                </a>
                            </li><!--end has-submenu-->
            
                        </ul><!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container-fluid -->
            </div> <!-- end navbar-custom -->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <h1 align="center" class="comsun">COMING SOON</h1>
                    <div class="coming-soon">
                    <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="float-right">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crypto</a></li>
                                            <li class="breadcrumb-item active">Exchange</li>
                                        </ol><!--end breadcrumb-->
                                    </div><!--end /div-->
                                    <h4 class="page-title">Archidax Exchange</h4>
                                </div><!--end page-title-box-->
                            </div><!--end col-->
                        </div><!--end row-->
                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">                                
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Price Chart</h4> 
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="media">
                                                    <img src="assets/images/coins/btc.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h5 class="m-0">$7289.45</h5>
                                                            <p class="text-muted mb-0">Bitcoin 
                                                                <span class="text-muted font-12">(BTC)</span>
                                                                <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                                            </p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-0 p-2 bg-soft-dark rounded"><b>Last: </b>0.25436584</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-0 p-2 bg-soft-success rounded"><b>24High: </b>0.25436584</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="mb-0 p-2 bg-soft-danger rounded"><b>24Low: </b>0.25436584</p>
                                            </div>
                                        </div>  
                                        <div id="exchange_candlestick" class="apex-charts"></div> 
                                                                
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">                                
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Total Balence</h4>                                   
                                            
                                        <ul class="list-group wallet-bal-crypto">
                                            <!--<li class="list-group-item align-items-center d-flex justify-content-between">
                                                <div class="media">
                                                    <img src="assets/images/coins/btc.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h3 class="m-0">Bitcoin</h3>
                                                            <p class="text-muted mb-0">USD</p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                <!--</div>
                                                <div class="coin-bal">
                                                    <h3 class="m-0">$21.32 BTC</h3>
                                                    <p class="text-muted mb-0">$153019.08USD</p>
                                                </div>
                                            </li>-->
                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                <div class="media">
                                                    <img src="assets/images/coins/eth.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h3 class="m-0">Ethereum</h3>
                                                            <p class="text-muted mb-0">USD</p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                </div>
                                                <div class="coin-bal">
                                                    <h3 class="m-0">$21.32 ETH</h3>
                                                    <p class="text-muted mb-0">$153019.08USD</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                <div class="media">
                                                    <img src="assets/images/coins/codeoku.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h3 class="m-0">Codeo</h3>
                                                            <p class="text-muted mb-0">USD</p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                </div>
                                                <div class="coin-bal">
                                                    <h3 class="m-0">$21.32 XMR</h3>
                                                    <p class="text-muted mb-0">$153019.08USD</p>
                                                </div>
                                            </li>                                        
                                            <!--<li class="list-group-item align-items-center d-flex justify-content-between">
                                                <div class="media">
                                                    <img src="assets/images/coins/dash.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h3 class="m-0">Dashcoin</h3>
                                                            <p class="text-muted mb-0">USD</p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                <!--</div>
                                                <div class="coin-bal">
                                                    <h3 class="m-0">$21.32 DASH</h3>
                                                    <p class="text-muted mb-0">$153019.08USD</p>
                                                </div>
                                            </li>
                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                <div class="media">
                                                    <img src="assets/images/coins/lite.png" class="mr-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                    <div class="media-body align-self-center"> 
                                                        <div class="coin-bal">                                                        
                                                            <h3 class="m-0">Litecoin</h3>
                                                            <p class="text-muted mb-0">USD</p>
                                                        </div>                                                                                              
                                                    </div><!--end media body-->
                                                <!--</div>
                                                <div class="coin-bal">
                                                    <h3 class="m-0">$200.32 LTC</h3>
                                                    <p class="text-muted mb-0">$153019.08USD</p>
                                                </div>
                                            </li>-->
                                        </ul>                     
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Buy Coins</h4>                                            
                                        <form class="form-horizontal">
                                            <div class="form-group mb-0">
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-light" id="basic-addon1">Amount</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon2">BTC</span>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price <i class="mdi mdi-chevron-down ml-1"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Last Trade Price</a>
                                                            <a class="dropdown-item" href="#">Last Buy Price</a>
                                                            <a class="dropdown-item" href="#">Last Sell Price</a>
                                                        </div>
                                                    </div>
                                                    <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="$ 24,00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon4">$ Dollor</span>
                                                    </div>                                                    
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-light" id="basic-addon5">Total</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon6">$ Dollor</span>
                                                    </div>
                                                </div>        
                                                <div class=" mt-3 ml-auto">
                                                    <a href="#" class="btn btn-success btn-sm">Buy Coins</a>
                                                </div>
                                            </div> <!--end form-group-->           
                                        </form> <!--end form-->    
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div><!--end col--> 

                            <div class="col-md-12 col-xl-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sell Coins</h4>                                            
                                        <form class="form-horizontal">
                                            <div class="form-group mb-0">
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-light" id="basic-addon7">Amount</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon8">BTC</span>
                                                    </div>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price <i class="mdi mdi-chevron-down ml-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Last Trade Price</a>
                                                            <a class="dropdown-item" href="#">Last Buy Price</a>
                                                            <a class="dropdown-item" href="#">Last Sell Price</a>
                                                        </div>
                                                    </div>
                                                    <input type="email" id="example-input2-group4" name="example-input2-group4" class="form-control" placeholder="$ 24,00">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon9">$ Dollor</span>
                                                    </div>
                                                        
                                                </div>
                                                <div class="input-group mt-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-light" id="basic-addon10">Total</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="123" aria-label="123" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-light" id="basic-addon11">$ Dollor</span>
                                                    </div>
                                                </div>    
                                                <div class="mt-3 ml-auto">
                                                    <a href="#" class="btn btn-danger btn-sm">Sell Coins</a>
                                                </div>
                                            </div> <!--end form-group-->           
                                        </form> <!--end form-->    
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div><!--end col--> 

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-3">Currency Cacculater</h4>                                            
                                        <div class="calculator-block">                        
                                            <div class="calculator-body">                                                      
                                                <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                            </div>
                                        </div>
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div><!--end col--> 
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Transaction History</h4> 
                                        <div class="table-responsive dash-social">
                                            <table id="datatable" class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Time</th>                                                    
                                                    <th>Transaction ID</th>
                                                    <th>Type</th>
                                                    <th>Value</th>
                                                </tr><!--end tr-->
                                                </thead>
            
                                                <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>14 Jan 2019</td>
                                                    <td>12:05PM</td>
                                                    <td>0001245368452136</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$521.36</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>02</td>
                                                    <td>13 Jan 2019</td>
                                                    <td>10:15AM</td>
                                                    <td>0012369584712458</td>
                                                    <td><span class="badge badge-soft-success">Received</span></td>
                                                    <td>$990.00</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>03</td>
                                                    <td>11 Jan 2019</td>
                                                    <td>09:14PM</td>
                                                    <td>0012457896321548</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$321.21</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>04</td>
                                                    <td>08 Jan 2019</td>
                                                    <td>12:05PM</td>
                                                    <td>0126582125487896</td>
                                                    <td><span class="badge badge-soft-success">Received</span></td>
                                                    <td>$321.21</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>05</td>
                                                    <td>06 Jan 2019</td>
                                                    <td>11:30AM</td>
                                                    <td>0125896312345878</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$458.80</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>06</td>
                                                    <td>05 Jan 2019</td>
                                                    <td>05:50PM</td>
                                                    <td>0001245863254874</td>
                                                    <td><span class="badge badge-soft-success">Received</span></td>
                                                    <td>125.50</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>07</td>
                                                    <td>04 Jan 2019</td>
                                                    <td>08:10PM</td>
                                                    <td>0000021253698745</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$365.21</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>08</td>
                                                    <td>03 Jan 2019</td>
                                                    <td>01:30PM</td>
                                                    <td>0000212125487963</td>
                                                    <td><span class="badge badge-soft-success">Received</span></td>
                                                    <td>$843.21</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>09</td>
                                                    <td>03 Jan 2019</td>
                                                    <td>12:05PM</td>
                                                    <td>0124563985478456</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$335.15</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>10</td>
                                                    <td>02 Jan 2019</td>
                                                    <td>03:15PM</td>
                                                    <td>0125896325483658</td>
                                                    <td><span class="badge badge-soft-success">Received</span></td>
                                                    <td>$554.50</td>
                                                </tr><!--end tr-->
                                                <tr>
                                                    <td>11</td>
                                                    <td>01 Jan 2019</td>
                                                    <td>10:05AM</td>
                                                    <td>0013256548745123</td>
                                                    <td><span class="badge badge-soft-danger">Sent</span></td>
                                                    <td>$225.25</td>
                                                </tr><!--end tr-->
                                                                                                
                                                </tbody>
                                            </table>                    
                                        </div>                                         
                                    </div><!--end card-body--> 
                                </div><!--end card--> 
                            </div><!--end col-->
                        </div><!--end row-->  
                    </div>
                </div><!-- container -->
            </div>

            <!-- Modal -->
            <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Welcome to dashboard</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p align="center">
                                <button class="btn btn-primary">Create a wallet</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <footer class="footer text-center text-sm-left">
               <div class="boxed-footer">
                    &copy; 2020 Five Angels Investment Limited <span class="text-muted d-none d-sm-inline-block float-right">Powered <i class="mdi mdi-heart text-danger"></i> by Codeo Token</span>
               </div>
            </footer><!--end footer-->
        </div>
        <!-- end page-wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="assets/js/custom.js"></script>

        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/pages/jquery.crypto-exchange.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
       
    </body>
</html>