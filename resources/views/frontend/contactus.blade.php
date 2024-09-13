@extends('frontend.layouts.main')

@section('main-container')
 				<div class="col-6 col-md-4 col-lg-5 text-right ext-right p0  d-none ">
					<div class="account-and-search">
						<div class="account-section">
							<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
								<i class="fa fa-sign-in" aria-hidden="true"></i>
							</button>

							<div class="modal wd-ph-modal fade bd-example-modal-lg" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="container">
											<div class="row text-left">
												<div class="col-md-12 p0">

													<div class="modal-tab-section wd-modal-tabs">
														<ul class="nav nav-tabs wd-modal-tab-menu text-center" id="myTab-account" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-expanded="true">Login</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="sign-up-tab-2" data-toggle="tab" href="#sign-up-2" role="tab" aria-controls="sign-up-2">Sign up</a>
															</li>
														</ul>
														<div class="tab-content" id="myTabContent-account">
															<div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">

																<div class="row">
																	<div class="col-md-6 p0 brand-description-area">
																		<img src="img/login-img-1.jpg" class="img-fluid" alt="">
																		<div class="brand-description">
																			<div class="brand-logo">
																				<img src="img/logo.png" alt="Logo">
																			</div>
																			<div class="modal-description">
																				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
																			</div>
																			<ul class="list-unstyled">
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																				<li class="media my-4">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-12 col-md-12 col-lg-6 p0">
																		<div class="login-section text-center">
																			<div class="social-media ph-social-media">
																				<a href="#" class="facebook-bg"><i class="fa fa-facebook" aria-hidden="true"></i> Login</a>
																				<a href="#" class="twitter-bg"><i class="fa fa-twitter" aria-hidden="true"></i> Login</a>
																				<a href="#" class="google-bg"><i class="fa fa-google-plus" aria-hidden="true"></i> Login</a>
																			</div>
																			<div class="login-form text-left">
																				<form>
																					<div class="form-group">
																						<label for="exampleInputEmail1">User name</label>
																						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="John mist |">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputPassword1">Password</label>
																						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="*** *** ***">
																					</div>
																					<button type="submit" class="btn btn-primary wd-login-btn">LOGIN</button>

																					<div class="form-check">
																						<label class="form-check-label">
																							<input type="checkbox" class="form-check-input">
																							Save this password
																						</label>
																					</div>
																					
																					<div class="wd-policy">
																						<p>
																							By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																							Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
																						</p>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
															<div class="tab-pane fade" id="sign-up-2" role="tabpanel" aria-labelledby="sign-up-tab-2">

																<div class="row">
																	<div class="col-md-12 p0 brand-login-section">
																		<img src="img/login-img-2.jpg" class="img-fluid" alt="">
																		<div class="brand-description">
																			<div class="brand-logo">
																				<img src="img/logo.png" alt="Logo">
																			</div>
																			<div class="modal-description">
																				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
																			</div>
																			<ul class="list-unstyled">
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																				<li class="media my-4">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																				<li class="media">
																					<i class="fa fa-check" aria-hidden="true"></i>
																					<div class="media-body">
																						Lorem ipsum dolor sit amet, consecadipisicing 
																						elit, sed do eiusmod teoccaecvoluptatem.
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-12 col-md-12 col-lg-6 p0">
																		<div class="sign-up-section text-center">
																			<div class="login-form text-left">
																				<form>
																					<div class="form-group">
																						<label for="exampleInputname-login-in">First name</label>
																						<input type="text" class="form-control" id="exampleInputname-login-in" placeholder="First Name">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputname-login-in-2">Last name</label>
																						<input type="text" class="form-control" id="exampleInputname-login-in-2" placeholder="Last Name">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputEmail-login-in">Email</label>
																						<input type="text" class="form-control" id="exampleInputEmail-login-in" placeholder="Enter you email ...">
																					</div>
																					<div class="form-group">
																						<label for="exampleInputPassword-login-in">Password</label>
																						<input type="password" class="form-control" id="exampleInputPassword-login-in" placeholder="*** *** ***">
																					</div>
																					<button type="submit" class="btn btn-primary wd-login-btn">Sign Up</button>
																					
																					<div class="wd-policy">
																						<p>
																							By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. 
																							Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
																						</p>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section>


    <!-- =========================
        Contact from Section
    ============================== -->
	<section id="contact-us">
	    <div class="container">
	    	<div class="row">
				<div class="col-12 p0">
					<div class="page-location">
						<ul>
							<li><a href="/">
								Home<span class="divider">/</span>
							</a></li>
							<li><a class="page-location-active" href="#">
								Contact Us
								<span class="divider">/</span>
							</a></li>
						</ul>
					</div>
				</div>
	    	</div>
	    	<div class="contact-us-content">
		        <div class="row">
					<div class="col-md-12">
						<div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d114273.81692542584!2d80.20329901258997!3d26.48611664746462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x399c39da13c50129%3A0x5ff5b65163b0bfb4!2s117%2FQ%2F710%2C%20near%209%20number%20crossing%2C%20Sharda%20Nagar%2C%20Kanpur%2C%20Uttar%20Pradesh%20208025!3m2!1d26.4861403!2d80.28570049999999!5e0!3m2!1sen!2sin!4v1725616262451!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
		        </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-9 col-xl-9">
						<div class="contact-from">
							<div class="contact-description">
								<h4 class="contact-description-title">Tell us about yourself</h4>
								<p class="contact-description-content">Your email address will not be published. Required fields are marked *</p>
							</div>
							@if(session('flash'))
                            <p style="colour:green">{{session('flash')}}</p>
                            @endif
							<form action="/contactus" method="POST" >
                            @csrf
							
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputEmail1" class="col-form-label">Name</label>
										<input type="text" class="form-control" id="inputEmail1" placeholder="Name" name="Name">
									</div>
									<div class="form-group col-md-6">
										<label for="inputEmail4" class="col-form-label">Email</label>
										<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="Email">
									</div>
									<div class="form-group col-md-12">
										<label for="exampleFormControlTextarea1" class="col-form-label">Your Message</label>
										<textarea name="Message" class="form-control" id="exampleFormControlTextarea1"></textarea>
									</div>
								</div>
								<button type="submit" class="btn btn-primary wd-contact-btn">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 col-xl-3">
						<div class="contact-address-area">
							<h4 class="contact-address-title">Address</h4>
							<p class="contact-address-content">Your email address will not be published.
							Required fields are marked *</p>
							<div class="contact-address">
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										
                                    117/Q/710 ,sharda nagar, Near 9 Number Crossing, Kanpur
									</div>
								</div>
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										<p><a href="tel:+91-8887917055">+91-8887917055</a></p>
										<p><a href="tel:+91-8887917055">+91-8887917055</a></p>
									</div>
								</div>
								<div class="media radius-icon-area">
									<div class="radius-icon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="media-body radius-content">
										<p><a href="https://www.themeim.com/cdn-cgi/l/email-protection#066f686069466f6860692865696b"><span class="__cf_email__" data-cfemail="2940474f46695d414c444c4044074a4644">
                                        ragyatech@gmail.com</span></a></p>
										<p><a href="https://www.themeim.com/cdn-cgi/l/email-protection#5e3c3f3a3631301e39333f3732703d3133"><span class="__cf_email__" data-cfemail="a4d7d1d4d4cbd6d0e4d0ccc1c9c1cdc98ac7cbc9">deveshchaturvedi006<br>@gmail.com</span></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</section>



@endsection