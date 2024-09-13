

    <!doctype html>
<html class="no-js" lang="">
  

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project-3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
	
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/rateyo.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/lightslider.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/flexslider.css')}}">
   	<link rel="stylesheet" href="{{url('frontend/css/jquery-ui.min.css')}}">

    <link rel="stylesheet" href="{{url('frontend/css/megamenu.css')}}">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

    <!-- =========================
    	Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body class="">
  
 

  <a href="#" id="side-button" class="nav-link-enquiry" data-toggle="modal" data-target="#enquiryNow">
     <div class="float-button">Enquire Now</div>
     </a>

     
		 <div class="contact-form" role="document" id="contact-form">
             <div class="modal-content"> 
             <div class="modal-header"> 
                <h5 class="modal-title" id=""> Enqiry Now</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-button"> 
                    <span aria-hidden="true">×</span> 
                </button> 
            </div> 
                <div class="modal-body"> 
                    <div class="popuphome-inner rm_pop_up_inner"> 
                        <div class="complaintsclss"> 
                            <h3 style="color:#fff;text-align:center;background-color:#045c8e;"> </h3> 
                            <div id="resultpopup">

                            </div>
                            @if(session('flash'))
                            <p style="colour:green">{{session('flash')}}</p>
                            @endif
							
                            
                            <form class="demo-form" method="POST" action="/" id="">
                                @csrf 
                                <input type="hidden" name="date_time" value="10-09-2024 11:45:02am"> 
                                <div class="form-group"> 
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="Name" required=""> 
                                </div> 
                                <div class="form-group"> 
                                    <div class="row"> 
                                        <div class="col-md-5"> 
                                            <select id="singleSelectValueDDjQuery" required="" class="form-control selectCountryCodePopup lazyloaded" name="Code1"> 
                                                <optgroup label="Top Pick"> 
                                                    <option data-countrycode="IN" value="91" selected="">India (+91)</option>
                                                     <option data-countrycode="KW" value="965">Kuwait (+965)</option> 
                                                     <option data-countrycode="AE" value="971">United Arab Emirates (+971)</option> 
                                                    </optgroup> 
                                                    <optgroup label="Other"> 
                                                    <option data-countrycode="AF" value="+93">Afghanistan (+93)</option> 
                                                    <option data-countrycode="AX" value="+358">Aland Islands (+358)</option> 
                                                    <option data-countrycode="AL" value="+355">Albania (+355)</option> 
                                                    <option data-countrycode="DZ" value="+213">Algeria (+213)</option> 
                                                    <option data-countrycode="AS" value="+1684">American Samoa (+1684)</option> 
                                                    <option data-countrycode="AD" value="+376">Andorra (+376)</option> 
                                                    <option data-countrycode="AO" value="+244">Angola (+244)</option> 
                                                    <option data-countrycode="AI" value="+1264">Anguilla (+1264)</option> 
                                                    <option data-countrycode="AQ" value="+672">Antarctica (+672)</option> 
                                                    <option data-countrycode="AG" value="+1268">Antigua and Barbuda (+1268)</option> 
                                                    <option data-countrycode="AR" value="+54">Argentina (+54)</option> 
                                                    <option data-countrycode="AM" value="+374">Armenia (+374)</option> 
                                                    
                                                     <option data-countrycode="YE" value="+967">Yemen (+967)</option>
                                                      <option data-countrycode="ZM" value="+260">Zambia (+260)</option>
                                                       <option data-countrycode="ZW" value="+263">Zimbabwe (+263)</option> 
                                                    </optgroup> </select> 
                                                    
                                                    <input type="hidden" id="textFieldValueJQ" class="form-control" name="Code" placeholder="get value on option select" value="91"> 
                                                </div> 
                                                <div class="col-md-7"> 
                                                    <input type="text" class="form-control mobile-valid-model" name="MobileNo" placeholder="Enter Mobile" onpaste="return false;" ondrop="return false;" autocomplete="off" required=""> 
                                                </div> 
                                            </div> 
                                        </div> 
                                        <div class="form-group"> 
                                            <input type="email" class="form-control" name="Email" placeholder="Enter Email" required=""> 
                                        </div> 
                                        <div class="custom-control custom-checkbox mr-sm-2"> 
                                        
                                     <label for="agree"><input type="checkbox" id="agree" name="agree">
                                     I Agree to <a href="#">Disclaimer, Terms & Conditions</a> 
                                     By Submitting. This form I authorise company to call me even if my number is registered in Do Not Call</label>
                                     </div> <br> 
                                            <input type="hidden" name="txtRequest" value=""> 
                                            <input type="hidden" name="action" value="sidebarContactUs"> 
                                            <button type="submit" class="button1">Submit</button> 
                                        </form> 
                                        
          </div> 
        </div> 
    </div> 
</div> 
</div> 

	 </div>

     
    

    <div class="preloader"></div>


    <!-- =========================
        Header Top Section
    ============================== -->
    <section id="wd-header-top">
    	<div class="topbar lazyloaded"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-lg-6 col-md-5"> 
					<div class="logo"><a href="" class="lazyloaded">
                    <img src="img/logo.png" class="wealth" alt="">
					</a> 
				</div> 
			</div> 
			<div class="col-lg-6 col-md-7 text-right"> 
				<ul> 
					
					<li class="lazyloaded"> 
						<div class="infocarediv">
							 <div class="carehedg"><img alt="logo" width="67px" height="58px" nitro-lazy-src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/uploads/2020/11/customer-care.png" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MTAwODoxNDY=-1" src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/uploads/2020/11/customer-care.png"> Customer Care 
							  <a href="tel:0281-6199999" class="carenumber"> +91-8887917055</a> 
							</div> </div> </li> </ul> </div> 
						</div> </div> </div>

    </section>

    <!-- =========================
        Header Top Section
    ============================== -->
    <section id="wd-header" class="d-flex align-items-center mob-sticky">
    	<div class="container">
    		<div class="row">
    		    <!-- =========================
					Mobile Menu 
				============================== -->
    		    <div class="order-2 order-sm-1 col-2 col-sm-2 col-md-4 d-block d-lg-none">
                    <div class="accordion-wrapper hide-sm-up">
                        <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a>
                        <!--Mobile Menu start-->

                        <ul id="mobilemenu" class="accordion">
                           <!-- <li class="mob-logo"><a href="index.html"><img src="img/logo.png" alt=""></a></li>-->
                            <li><a class="closeme" href="#"><i class="fa fa-times" ></i></a></li>
                            
                            <li>
                                <div class="link"><a href="/">Home</a></div>
                                
                            </li>
                            <li>
                                <div class="link"><a href="aboutus">About Us </a></div>
                                
                            </li>
                            <li>
                                <div class="link "> <a href="market">Market</a></div>
                                
                            </li>
                            <li class="out-link"><a class="" href="services">Services</a></li>
                            
                            <li>
                                <div class="link"><a href="#">Reviews</a> </div>
                                
                            </li>
                            <li class="out-link"><a class="" href="gallery">Gallery</a></li>
                            <li class="out-link"><a class="" href="contact">Contact Us</a></li>
                            </li>
                            
                            
                            
                            
                            

                        </ul>
                        <!--Mobile Menu end-->
                    </div>
    		    </div><!--Mobile menu end-->
				    
    			<div class="order-1 order-sm-2  col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2">
    				<div class="blrub-logo">
	    				<a href="index">
	    					
	    				</a>
    				</div>
    			</div>

				
				<!--Row End-->
    	</div><!--Container End-->
    </section><!--Section End-->
    <section id="main-menu" class="sticker-nav">
    	<div class="container">
    		<div class="row">
    			<div class="col-2 col-md-6 col-lg-10 ">
					<div class="menu-container wd-megamenu">
                        <div class="menu">
                            <ul class="wd-megamenu-ul">
                                <li><a href="/" class="main-menu-list"><i class="fa fa-home" aria-hidden="true"></i> HOME </a>
                                    
                                </li>


                                <li><a href="aboutus" class="main-menu-list">ABOUT US</a>
                                    
                                </li>
                                <li><a href="market" class="main-menu-list">MARKET <i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
								    <!-- <ul class="single-dropdown">
									    <li><a href="">Cash </a></li>
                                        <li><a href="">Stock Option</a></li>
										<li><a href="">Delivery</a></li>
										<li><a href="">Index</a></li>
                                        <li><a href="">Future</a></li>
                                        <li><a href="">Stock + Index Options</a></li>
                                    </ul>-->
                                    
       <ul class="single-dropdown">                      
        <div class="row">
        <div class="column">
       <div class="icon-box" >
        <img alt="lock" nitro-lazy-src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/capital.png" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MTA0NDoxNTE=-1" src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/capital.png"> 
 
          <h5>Equity</h5></div>
          <li class="menu1"><a href="#">Cash</a><li>
          <li class="menu1"><a href="#">Stock Overflow</a></li>
          <li class="menu1"><a href="#">Delivery</a></li>
          
          <li class="menu1"><a href="">Index</a></li>
          <li class="menu1"><a href="">Future</a></li>
          <li class="menu1"><a href="">Stock + Index Options</a></li>
        </div>
        <div class="column">
        <div class="icon-box" > 
            <img alt="money" nitro-lazy-src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/wealth.png" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MTA1NjoxNTE=-1" src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/wealth.png">
          <h5>MCX</h5></div>
          <li class="menu1"><a href="#">Normal MCX</a></li>
          <li class="menu1"><a href="#">Bullions</a></li>
          <li class="menu1"><a href="#">Energy</a></li>
          <li class="menu1"><a href="#">Metal</a></li>
          <li class="menu1"><a href="#">MCX Option</a></li>
        </div>
        <div class="column">
        <div class="icon-box" >
        <img alt="deal" nitro-lazy-src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/deal.png" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MTA2NzoxNDg=-1" src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/deal.png">
          <h5>NCDEX</h5></div>
          <li class="menu1"><a href="#">Normal NCDEX</a></li>
          
        </div>
        
        <div class="column">
        <div class="icon-box" >
        <img alt="money" nitro-lazy-src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/money.png" class="img-fluid lazyloaded" decoding="async" nitro-lazy-empty="" id="MTA4MjoxMjg=-1" src="https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/money.png">
          <h5>Currency</h5></div>
          <li class="menu1"><a href="crypto">Currency</a></li>
          
        </div>
      </div>
    </ul>    </li>

    <li><a href="services" class="main-menu-list">Services </a>
								    
                                    
									</li>
                                
                                
                                <li><a href="#" id="trigger-link-7" class="main-menu-list">REVIEWS</a>
                                    
                                </li>

                                <li><a href="gallery" class="main-menu-list">Gallery </a>
								    
                                    
									</li>   
                                <li><a href="contactus" class="main-menu-list">Contact Us </a>
								    
                                    
                                </li>
                                
								

                                     
                                
                                
                            </ul>
                        </div>
					</div>
    			</div>