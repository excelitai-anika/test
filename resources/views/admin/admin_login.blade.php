<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="panel/assets/images/favicon.png" >
        <!--Page title-->
        <title>Admin Login</title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="panel/assets/css/bootstrap.min.css"> -->
        <!--font awesome-->
        <!-- <link rel="stylesheet" href="panel/assets/css/all.min.css"> -->
        <!-- metis menu -->
        <!-- <link rel="stylesheet" href="panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css">
        <link rel="stylesheet" href="panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css"> -->
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <!-- <link rel="stylesheet" href="panel/assets/css/style.css"> -->
        <style>
            .login-wrapper{
                padding:100px 0;
                height:100vh;
                background:#dfe6e9;
            }
            .login-inner{
                border-radius:10px;
            }

            .from-bg{
                width:600px;
                border-radius:10px;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <!-- <img src="panel/assets/images/preloader.gif" alt=""> -->
        </div>

        
        <!-- wrapper -->
          <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                            <div class="logo">
                                <!-- <img src="panel/assets/images/logo.png" alt="" class="img-fluid"> -->
                            </div>

    @if(Session::has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session::get('error')}}</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    @endif
                            <div class="d-flex justify-content-center align-items-center  login-wrapper">    
                            <div class="d-flex justify-content-center align-items-center bg-white login-inner">    
                            <form action="{{route('admin.login')}} " class="d-block bg-white p-5  from-bg" method="post">
                                @csrf
                                
                                <div class="form-group icon_parent">
                                     <label for="password">Email</label>
         <input  type="email" class="form-control"  name="email" value=" " required autocomplete="email" autofocus placeholder="Email Address">
              <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                                 
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
       <input  type="password" class="form-control"   name="password" required autocomplete="current-password" placeholder="Password">
                                        
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="chech_container">Remember me
                                        <input type="checkbox" name="remember" id="remember" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="from-button d-flex align-items-center justify-content-between">
                                <div class="form-group">
                                    <a class="registration " href=" ">Create new account</a><br>
                                    <a href=" " class="">I forgot my password</a>
        
                                </div>
                               
                                <button type="submit" class="btn btn-secondary">Login</button>
                                </div>

                              
                            </form>

                        </div>
                        </div>
                            <div class="footer">
                               <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                            </div>
                            
                        </div>
                    </div>






                    <!-- bootsrtap start -->


               
                    <!-- bootstrap end -->



            </div><!--/ content wrapper -->
        </div><!--/ wrapper -->


        
        <!-- jquery -->
        <!-- <script src="panel/assets/js/jquery.min.js"></script> -->
        <!-- popper Min Js -->
        <!-- <script src="panel/assets/js/popper.min.js"></script> -->
        <!-- Bootstrap Min Js -->
        <!-- <script src="panel/assets/js/bootstrap.min.js')}}"></script> -->
        <!-- Fontawesome-->
        <!-- <script src="panel/assets/js/all.min.js')}}"></script> -->
        <!-- metis menu -->
        <!-- <script src="panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js"></script>
        <script src="panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js"></script> -->
        <!-- nice scroll bar -->
        <!-- <script src="panel/assets/plugins/scrollbar/jquery.nicescroll.min.js"></script>
        <script src="panel/assets/plugins/scrollbar/scroll.active.js"></script> -->
        <!-- counter -->
        <!-- <script src="panel/assets/plugins/counter/js/counter.js"></script> -->
        <!-- chart -->
   <!-- <script src="panel/assets/plugins/chartjs-bar-chart/Chart.min.js"></script>
        <script src="panel/assets/plugins/chartjs-bar-chart/chart.js"></script> -->
        <!-- pie chart -->
        <!-- <script src="panel/assets/plugins/pie_chart/chart.loader.js"></script>
        <script src="panel/assets/plugins/pie_chart/pie.active.js"></script> -->
 
 
        <!-- Main js -->
        <!-- <script src="panel/assets/js/main.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
     


    </body>
</html>