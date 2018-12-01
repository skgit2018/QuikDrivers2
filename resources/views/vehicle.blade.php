<?php 

if(!Session::has('userdata')){

    echo "<script>";
    echo "location.replace('/login');";
    echo "</script>";
}

$sess_id = Session::get('userdata')['id'];

?>
<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9">
      <![endif]-->
      <!--[if !IE]><!--> 
      <html lang="en">
         <!--<![endif]-->
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
         <head>
            <title>Quikdrivers</title>
            <!-- Meta -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico">
            <!-- Web Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
            <!-- CSS Global Compulsory -->
            <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <!-- CSS Header and Footer -->
            <link rel="stylesheet" href="assets/css/headers/header-v1.css">
            <link rel="stylesheet" href="assets/css/footers/footer-v1.css">
            <!-- CSS Implementing Plugins -->
            <link rel="stylesheet" href="assets/plugins/animate.css">
            <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
            <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
            <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               @include('inc.menu')
               </div>
               <br/>
               <section id="Vechicle-check">
                  <div class="container">
                     <div action="#" id="sky-form" class="sky-form">
                     {!! Form::open(['url' => '/vehicle/info', 'method' =>'POST']) !!}
                        <header>Vehicle Information</header>
                        <input type="hidden" name="reg_user_id" value="<?php echo $sess_id;?>" />
                        <fieldset>
                           <div class="row">
                              <section class="col col-6">
                                 <span>Vehicle Type
                                 <sup style="color:red;">*</sup>
                                 </span>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-car"></i>
                                 <input type="text" name="reg_vehicle_type" placeholder="">
                                 </label>
                              </section>
                              <section class="col col-6">
                                 <span>Vehicle Make
                                 <sup style="color:red;">*</sup>
                                 </span>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-car"></i>
                                 <input type="text" name="reg_vehicle_make" placeholder="">
                                 </label>
                              </section>
                           </div>
                           <div class="row">
                              <section class="col col-6">
                                 <span>Vehicle Model
                                 <sup style="color:red;">*</sup>
                                 </span>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-car"></i>
                                 <input type="text" name="reg_vehicle_model" placeholder="">
                                 </label>
                              </section>
                              <section class="col col-6">
                                 <span>Vehicle No.
                                 </span><sup style="color:red;">*</sup>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-car"></i>
                                 <input type="text" name="reg_vehicle_No" placeholder="">
                                 </label>
                              </section>
                           </div>
                           <div class="row">
                              <section class="col col-6">
                                 <span>Vehicle Year
                                 </span>
                                 <label class="input">
                                 <i class="icon-prepend fa fa-car"></i>
                                 <input type="text" name="reg_vehicle_year" placeholder="">
                                 </label>
                              </section>
             
            
            </div>
            <br/>
            <footer class="bt">
            <button type="submit" class="btn-u">Continue</a> 
            </footer>
            </div>
            {!! Form::close() !!}
            </div>
            </section>
            <br/>
           @include('inc.footer')            </div>
            <!--/wrapper-->
            <!-- JS Global Compulsory -->
            <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
            <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
            <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
            <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
            <!--Slider JS -->
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
            <script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
            <!-- JS Customization -->
            <script type="text/javascript" src="assets/js/custom.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
            <script type="text/javascript" src="assets/js/forms/order.js"></script>
            <script type="text/javascript" src="assets/js/forms/review.js"></script>
            <script type="text/javascript" src="assets/js/forms/checkout.js"></script>
            <script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
            <script type="text/javascript">
               jQuery(document).ready(function() {
                   App.init();
                OwlCarousel.initOwlCarousel();
                ParallaxSlider.initParallaxSlider();
                   
               });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
      </html>