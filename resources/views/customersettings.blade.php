<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:17 GMT -->
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
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

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
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/profile.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		     @include('inc.menu')

               <section id="settingss">
		<!--=== Profile ===-->
		<div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">
					<div class="profile-bio">
                  <div class="row">
                     <div class="col-md-14">
                           <span class="chamge"><img class="img-responsive md-margin-bottom-10" src="assets/img/team/img32-md.jpg" alt=""></span>
                           <a class="btn-u btn-u-sm" href="#">Change Picture</a>
                        </div>
                     </div>
               </div>
			   <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                              <li class="list-group-item active">
                                 <a href="/cutomerdashboard"><i class="fa fa-bar-chart-o"></i>Dashboard</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerprofiles"><i class="fa fa-user"></i>My Profile</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerrides"><i class="fa fa-car"></i>My Rides</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerpayments"><i class="fa fa-cc-visa"></i>My Payments</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customersettings"><i class="fa fa-cog"></i>Settings</a>
                              </li>
                           </ul>
					
					<!--End Datepicker-->
				</div>
				<!--End Left Sidebar-->

				<!-- Profile Content -->
				<div class="col-md-9">
					<div class="profile-body margin-bottom-20">
						<div class="tab-v1">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a data-toggle="tab" href="#profile">Edit Profile</a></li>
								<li><a data-toggle="tab" href="#passwordTab">Change Password</a></li>
								<li><a data-toggle="tab" href="#payment">Payment Options</a></li>
								<li><a data-toggle="tab" href="#settings">Notification Settings</a></li>
							</ul>
							<div class="tab-content">
								<div id="profile" class="profile-edit tab-pane fade in active">
									<h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
									<p>Below are the name and email addresses on file for your account.</p>
									<br>
									<dl class="dl-horizontal">
										<dt><strong>Your name </strong></dt>
										<dd>
											Edward Rooster
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Your ID </strong></dt>
										<dd>
											FKJ-032440
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Company name </strong></dt>
										<dd>
											Htmlstream
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Primary Email Address </strong></dt>
										<dd>
											edward-rooster@gmail.com
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Phone Number </strong></dt>
										<dd>
											(304) 33-2867-499
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Office Number </strong></dt>
										<dd>
											(304) 44-9810-296
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
										<dt><strong>Address </strong></dt>
										<dd>
											California, US
											<span>
												<a class="pull-right" href="#">
													<i class="fa fa-pencil"></i>
												</a>
											</span>
										</dd>
										<hr>
									</dl>
									<button type="button" class="btn-u btn-u-default">Cancel</button>
									<button type="button" class="btn-u">Save Changes</button>
								</div>

								<div id="passwordTab" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Security Settings</h2>
									<p>Change your password.</p>
									<br>
									<form class="sky-form" id="sky-form4" action="#">
										<dl class="dl-horizontal">
											<dt>Username</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-user"></i>
														<input type="text" placeholder="Username" name="username">
														<b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
													</label>
												</section>
											</dd>
											<dt>Email address</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-envelope"></i>
														<input type="email" placeholder="Email address" name="email">
														<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
													</label>
												</section>
											</dd>
											<dt>Enter your password</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-lock"></i>
														<input type="password" id="password" name="password" placeholder="Password">
														<b class="tooltip tooltip-bottom-right">Don't forget your password</b>
													</label>
												</section>
											</dd>
											<dt>Confirm Password</dt>
											<dd>
												<section>
													<label class="input">
														<i class="icon-append fa fa-lock"></i>
														<input type="password" name="passwordConfirm" placeholder="Confirm password">
														<b class="tooltip tooltip-bottom-right">Don't forget your password</b>
													</label>
												</section>
											</dd>
										</dl>
										<label class="toggle toggle-change"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Remember password</label>
										<br>
										<section>
											<label class="checkbox"><input type="checkbox" id="terms" name="terms"><i></i><a href="#">I agree with the Terms and Conditions</a></label>
										</section>
										<button type="button" class="btn-u btn-u-default">Cancel</button>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
								</div>

								<div id="payment" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Payment Settings</h2>
									<p>Below are the payment options for your account.</p>
									<br>
									<form class="sky-form" id="sky-form" action="#">
										<!--Checkout-Form-->
										<section>
											<div class="inline-group">
												<label class="radio"><input type="radio" checked="" name="radio-inline"><i class="rounded-x"></i>Visa</label>
												<label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>MasterCard</label>
												<label class="radio"><input type="radio" name="radio-inline"><i class="rounded-x"></i>PayPal</label>
											</div>
										</section>

										<section>
											<label class="input">
												<input type="text" name="name" placeholder="Name on card">
											</label>
										</section>

										<div class="row">
											<section class="col col-10">
												<label class="input">
													<input type="text" name="card" id="card" placeholder="Card number">
												</label>
											</section>
											<section class="col col-2">
												<label class="input">
													<input type="text" name="cvv" id="cvv" placeholder="CVV2">
												</label>
											</section>
										</div>

										<div class="row">
											<label class="label col col-4">Expiration date</label>
											<section class="col col-5">
												<label class="select">
													<select name="month">
														<option disabled="" selected="" value="0">Month</option>
														<option value="1">January</option>
														<option value="1">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
													<i></i>
												</label>
											</section>
											<section class="col col-3">
												<label class="input">
													<input type="text" placeholder="Year" id="year" name="year">
												</label>
											</section>
										</div>
										<button type="button" class="btn-u btn-u-default">Cancel</button>
										<button class="btn-u" type="submit">Save Changes</button>
										<!--End Checkout-Form-->
									</form>
								</div>

								<div id="settings" class="profile-edit tab-pane fade">
									<h2 class="heading-md">Manage your Notifications.</h2>
									<p>Below are the notifications you may manage.</p>
									<br>
									<form class="sky-form" id="sky-form3" action="#">
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Email notification</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user comments on my blog</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification for the latest update</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Send me email notification when a user sends me message</label>
										<hr>
										<label class="toggle"><input type="checkbox" checked="" name="checkbox-toggle-1"><i class="no-rounded"></i>Receive our monthly newsletter</label>
										<hr>
										<button type="button" class="btn-u btn-u-default">Reset</button>
										<button class="btn-u" type="submit">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Profile Content -->
			</div><!--/end row-->
		</div>
		<!--=== End Profile ===-->
	</section>

		@include('inc.footer')
	</div><!--/wrapper-->

	
	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/forms/reg.js"></script>
	<script type="text/javascript" src="assets/js/forms/checkout.js"></script>
	<script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			RegForm.initRegForm();
			Datepicker.initDatepicker();
			CheckoutForm.initCheckoutForm();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:19 GMT -->
</html>
