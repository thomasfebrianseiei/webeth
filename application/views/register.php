<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Codeo - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <div class="account-body accountbg">

        <!-- Log In page -->
        <div class="row vh-100 bg-city">
            <div class="col-md-6 hidden-sm align-self-center">
                <p align="center">
                    <img src="../assets/images/coins/codeoku.png" width="50%" class="hidden-sm">
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 align-self-center">
                <div class="auth-page ml-10-per">
                    <div class="card auth-card shadow-lg" style="margin-bottom: 0;">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="../analytics/analytics-index.html" class="logo logo-admin"><img src="../assets/images/logo_codeo.png" height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-2 mt-4">Register</h4>
                                </div> <!--end auth-logo-text-->  

                                
                                <form class="form-horizontal auth-form my-4" action="index.html">
        
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i> 
                                            </span>                                                                                                              
                                            <input type="text" class="form-control frm-new" id="name" placeholder="Enter name">
                                        </div>                                    
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-mail"></i> 
                                            </span>                                                                                                              
                                            <input type="text" class="form-control frm-new" id="email" placeholder="Enter email">
                                        </div>                                    
                                    </div><!--end form-group--> 
        
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control frm-new" id="userpassword" placeholder="Enter password">
                                        </div>                               
                                    </div><!--end form-group--> 

                                    <div class="form-group">
                                        <label for="userpassword">Confirm Password</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control frm-new" id="userpassword" placeholder="Enter password">
                                        </div>                               
                                    </div><!--end form-group--> 
        
                                    <div class="form-group row mt-4">
                                        <!--<div class="col-sm-6">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-sm-12 text-right">
                                            <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                        </div><!--end col--> 
                                    </div><!--end form-group--> 
        
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <a href="<?php echo base_url('homelogincontroller') ?>" class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></a>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->
                            </div><!--end /div-->
                            
                            <div class="account-social text-center">
                                <h6 class="my-4">Or Signup With</h6>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-facebook-f facebook"></i>
                                        </a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-twitter twitter"></i>
                                        </a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-google google"></i>
                                        </a>                                    
                                    </li>
                                </ul>
                            </div><!--end account-social-->

                            <div class="m-3 text-center text-muted" style="display: none;">
                                <p> <a href="../authentication/auth-register.html" class="text-primary ml-2"></a></p>
                            </div>
        
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
            </div><!--end col-->
            <div align="center" style="width: 100%;">
                <span align="center">
                    ©2020 Five Angel Investment Limited - BVI
                </span>
            </div>
        </div><!--end row-->

        <!-- End Log In page -->
    

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js') ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js') ?>"></script>

    </body>
</html>