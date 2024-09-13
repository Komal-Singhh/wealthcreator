<!--header with telwind css -->

<!-- <!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>
    <header class="bg-white">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
        
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 ">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 ">
                    <li class="font-sans md:font-serif">
                        <a class="hover:text-sky-600" href="#">HOME</a>
                    </li>
                    <li class="font-serif">
                        <a class="hover:text-sky-600" href="#">ABOUT US</a>
                    </li>
                    <li class="font-serif">
                        <a class="hover:text-sky-600" href="#">SERVICES</a>
                    </li>
                    <li class="font-serif">
                        <a class="hover:text-sky-600" href="#">PAYMENT OPTIONS</a>
                    </li>
                    <li class="font-serif">
                        <a class="hover:text-sky-600" href="#">REVIEWS</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
            <button class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Sign in</button>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>-->



<!-- Home Form -->
<!-- <!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
}

.container {
  width: 300px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

input[type="text"], input[type="email"], input[type="tel"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

select {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input[type="checkbox"] {
  margin-right: 5px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>

<div class="container">
  <h2>Enquiry Form</h2>
  <form>
    <label for="name">Enter Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name">

    <label for="mobile">Enter Mobile:</label>
    <select id="country-code" name="country-code">
      <option value="+91">India (+91)</option>
      </select>
    <input type="tel" id="mobile" name="mobile" placeholder="Your Mobile Number">

    <label for="email">Enter Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email">

    <input type="checkbox" id="agree" name="agree">
    <label for="agree">I Agree to <a href="#">Disclaimer, Terms & Conditions</a> By Submitting. This form I authorise company to call me even if my number is registered in Do Not Call</label>

    <button type="submit">SUBMIT</button>
  </form>
</div>

</body>
</html>-->



<!-- Home page -->
<!-- <html>
<head>
	<style>

.banner {
    background: url(https://cdn-aejmc.nitrocdn.com/IfFtXtYYsxfVXtLJpTkZNIcpfONlJTBm/assets/images/optimized/rev-4da0a7b/www.shyamadvisory.com/wp-content/themes/shyam-advisory/assets/images/banner.jpg) no-repeat center / cover;
    padding: 20px 0;
}

.banner .row {
    align-items: center;
}
.banner .recommendation {
    background: rgba(255, 255, 255, .5);
    padding: 90px 60px;
}
.recommendation .slider-first-title {
    font-size: 18px;
    color: #fff;
    background: #17181a;
    display: inline;
    font-weight: 600;
    padding: 6px 10px;
    font-family: Roboto, sans-serif;
}

.recommendation .slider-sub-title {
    font-size: 65px;
    color: #17181a;
    font-weight: 700;
    font-family: Roboto, sans-serif;
}
.recommendation p {
    font-size: 28px;
    color: #17181a;
    font-weight: 500;
    font-family: Roboto, sans-serif;
    letter-spacing: 1px;
}
.enquiry-form {
    background: #fff;
    border-radius: 10px;
}
.enquiry-form h3 {
    font-size: 25px;
    background: #0486c2;
    color: #fff;
    font-weight: 700;
    font-family: Roboto, sans-serif;
    text-align: center;
    padding: 20px 0;
    margin-bottom: 0;
    border-radius: 10px 10px 0 0;
}
.enquiry-form .form-control {
    font-weight: 400;
    font-family: Roboto, sans-serif;
    height: 40px;
}
.form-control {
    display: block;
    width: 100%;
    height: 48px;
    padding-left: 14px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem;
}
.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}
.custom-control .custom-control-label {
    margin-left: 8px;
}
.enquiry-form .custom-control-label {
    font-size: 12px;
    color: #333;
}
.enquiry-form .custom-control-label {
    font-size: 12px;
    color: #333;
}
.enquiry-form .custom-control-label {
    font-size: 12px;
    color: #333;
}
.form-group {
    margin-bottom: 15px !important;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 768px) {
    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
}
.banner .row {
    align-items: center;
}
@media (min-width: 768px) {
    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
}
.enquiry-form .form-control {
    font-weight: 400;
    font-family: Roboto, sans-serif;
    height: 40px;
}
.enquiry-form .form-control {
    font-weight: 400;
    font-family: Roboto, sans-serif;
    height: 40px;
    color: #424242;
}
.enquiry-form .form-control {
    font-weight: 400;
    font-family: Roboto, sans-serif;
    height: 40px;
}
.form-control {
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.form-control {
    display: block;
    width: 100%;
    height: 48px;
    padding-left: 14px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
select {
    word-wrap: normal;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
* {
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}
form#contactSide {
    padding: 15px 15px;
}
form {
    display: block;
    margin-top: 0em;
    unicode-bidi: isolate;
}


	</style>
</head>
<body>
<section class="banner wow"> 
	<div class="container"> 
		<div class="row"> 
			<div class="col-lg-7">
	 <div class="recommendation"> 
		<div class="slider-first-title">We Give</div> 
	 <div class="slider-sub-title">Recommendation</div> 
	 <p>of the Right Stocks at the right time</p> 
	</div> 
</div> 
<div class="col-lg-5">
	 <div class="enquiry-form">
		 <h3>Enquiry Form</h3> 
		 <div id="result">

		 </div> 
		 <form class="demo-form" method="post" action="" id="contactSide"> 
			<input type="hidden" name="date_time" value="02-09-2024 10:25:39am"> 
			<div class="form-group"> 
				<input type="text" id="name" placeholder="Enter Name" name="txtName" required="" class="form-control lazyloaded"> 
			</div> 
			<div class="form-group"> 
				<div class="row"> 
					<div class="col-md-5">
				 
			
			<select id="singleSelectValueDDjQuery" required="" class="form-control lazyloaded">
					 <optgroup label="Top Pick"> 
						<option data-countrycode="IN" value="91">India (+91)</option>  
					</optgroup> 
					<optgroup label="Other"> 
<option data-countrycode="AF" value="+93">Afghanistan (+93)

</option> 

<option data-countrycode="LU" value="+352">Luxembourg (+352)</option> 
<option data-countrycode="MO" value="+853">Macau (+853)</option> 
<option data-countrycode="MG" value="+261">Madagascar (+261)</option> 
<option data-countrycode="MW" value="+265">Malawi (+265)</option> 
<option data-countrycode="MY" value="+60">Malaysia (+60)</option> 
<option data-countrycode="MV" value="+960">Maldives (+960)</option>
<option data-countrycode="FM" value="+691">Micronesia, Federated States of Micronesia (+691)</option> 
<option data-countrycode="SY" value="+963">Syrian Arab Republic (+963)</option>
<option data-countrycode="TW" value="+886">Taiwan (+886)</option> 
<option data-countrycode="TJ" value="+992">Tajikistan (+992)</option> 
 </optgroup> </select> 
 <input type="hidden" id="textFieldValueJQ" class="form-control" name="code" placeholder="get value on option select" value="91"> 
</div> <div class="col-md-7"> 
	<input type="text" class="form-control mobile-valid" name="txtMobile" placeholder="Enter Mobile" onpaste="return false;" ondrop="return false;" autocomplete="off" required=""> 
</div> </div> </div> <div class="form-group"> 
	<input type="email" class="form-control" name="txtEmail" placeholder="Enter Email" required=""> 
</div> <div class="custom-control custom-checkbox mr-sm-2"> 
	<input name="checklist" type="checkbox" class="custom-control-input" id="custom-Control" required="">
	 <label class="custom-control-label" for="custom-Control">I Agree to <a href="" target="_blank">Disclaimer</a>,
	  <a href="" target="_blank">Terms &amp; Conditions</a> 
	  By Submitting. This form I authorise company to call me even if my number is registered in Do Not Call 
	</label> </div> <br> <input type="hidden" name="txtRequest" value=""> 
	<input type="hidden" name="action" value="sidebarContactUs"> 
	<button type="submit" data-sitekey="6LcmCT8kAAAAACgSJqFwf1-WLOEfCCo-hMb2YYTq" data-callback="onSubmit" data-action="submit" class="btn btn-outline-primary g-recaptcha lazyloaded">
		Submit</button> 
	</form> 

	 </div> </div> </div> </div> </section>
</body>
</html>-->



<!-- form side button-->

<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Side Button with Contact Form</title>
  <style>
    /* Side button */
    .side-button {
      position: fixed;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .side-button:hover {
      background-color: #3e8e41;
    }

    /* Contact form */
    .contact-form {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      width: 300px;
      height: auto;
      display: none;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form.show {
      display: block;
    }

    /* Close button */
    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  
  <a href="#" id="side-button" class="side-button">
    <div class="float-button">Enquire Now</div>
  </a>


  <div id="contact-form" class="contact-form">
    <h2>Contact Us</h2>
    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea><br><br>
      <input type="submit" value="Send">
    </form>
    
    <button id="close-button" class="close-button">×</button>
  </div>

  <script>
    // Get the side button, contact form, and close button elements
    const sideButton = document.getElementById('side-button');
    const contactForm = document.getElementById('contact-form');
    const closeButton = document.getElementById('close-button');

    // Add an event listener to the side button to toggle the contact form
    sideButton.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent the default link behavior
      contactForm.classList.toggle('show');
    });

    // Add an event listener to the close button to close the form
    closeButton.addEventListener('click', () => {
      contactForm.classList.remove('show');
    });

    // Add an event listener to the document to close the form when clicked outside
    document.addEventListener('click', (e) => {
      if (!contactForm.contains(e.target) && !sideButton.contains(e.target)) {
        contactForm.classList.remove('show');
      }
    });
  </script>
</body>
</html>-->


<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form with Gmail Submission</title>
  <style>
    /* Contact form */
    .contact-form {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      width: 300px;
      height: auto;
      display: none;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form.show {
      display: block;
    }

    /* Close button */
    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Contact form -->
  <div id="contact-form" class="contact-form">
    <h2>Contact Us</h2>
    <form id="contact-form" method="post" action="mailto:komal.jim.mca.2022@gmail.com" enctype="text/plain">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea><br><br>
      <input type="submit" value="Send">
    </form>
    <!-- Add a close button -->
    <button id="close-button" class="close-button">×</button>
  </div>

  <script>
    // Get the contact form and close button elements
    const contactForm = document.getElementById('contact-form');
    const closeButton = document.getElementById('close-button');

    // Add an event listener to the close button to close the form
    closeButton.addEventListener('click', () => {
      contactForm.classList.remove('show');
    });

    // Add an event listener to the document to close the form when clicked outside
    document.addEventListener('click', (e) => {
      if (!contactForm.contains(e.target) && !closeButton.contains(e.target)) {
        contactForm.classList.remove('show');
      }
    });

    // Add an event listener to the form to send the data to Gmail
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(form);
      const mailto = `mailto:komal.jim.mca.2022@gmail.com?subject=Contact Form Submission&body=${formData.get('name')}\n${formData.get('email')}\n${formData.get('message')}`;
      window.location.href = mailto;
    });
  </script>
</body>
</html>