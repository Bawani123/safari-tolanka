<?php
require_once('config_db.php');
?>

<!DOCTYPE html>
<html>


	<head>

		<title>
			Contact Us | Safari To Lanka
		</title>	
		
		<meta name="viewport"
		content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		  		
  		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css"><--the link for icons-->


		<link href="style7.css" rel="stylesheet /"> 
	</head>

		<body>

			<div class="padding">
			<section>
			
		<header>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
							
							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>	
						<a class="navbar-brand" href="Homepage.php"><img src="img/lanka4.png"></a>

					</div>




				<div class="collapse navbar-collapse" id="navbar-collapse-main"> 
				


					<ul class="nav navbar-nav navbar-right">
					<li><a href="Homepage.php">Home 
						</a></li>
						<li><a href="mytest.php">About  
						</a></li>

						<li><a href="pak.php">Packages  
						</a></li>
						<li><a href="login.php">Plan my trip
						</a></li>

						<li><a href="join.php">Join with us
						</a></li>
						<li><a href="contact%20us.php">Contact
						</a></li>
						
					</ul>
				</div>
				</div>
				
			</nav>

		</header>
	</section>

	<section class="heading-section">
    <div class="container pl-3 p-sm-3">
      <div class="row">
        <div class="col-12">
          <h2>Contact Us</h2>
          
        </div>
      </div>
    </div>

  	</section>
			
	<section>
				<div class = "container" >
					<div class = "row" >
						<div class = "col-12">
							<p>We are always here to help. If your have requirements/queries about our services; fill up the contact form
            below and we'll do our best to reply within 24 hours Alternatively simply pickup the phone and give us a
            call.
        					</p>
        					<hr>
    					</div>
					</div>
				</div>
	</section>

	<section class="form-section">



    <div class="container">

    		<div> 


		<?php


			
		?>
	</div>


      <div class="row">
        <div class="col-md-6">
          <form action="contact us.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name = "fullname" id = "fullname" placeholder="Full name *" required>

              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Email Address *" name = "email" id = "email" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" class="form-control" placeholder="Contact Number *" name = "contactNo" id = "contactNo" required>

              </div>
              <div class="form-group col-md-6">
                <select class="form-control" name="country" id="country" required>
                  <option selected>Country</option>
                  <option>India</option>
                  <option>America</option>
                  <option>England</option>
                  <option>China</option>
                   <option>KSA</option>
                  <option>UAE</option>
                  <option>Maldives</option>
                  <option>Japan</option>
                   <option>Turkey</option>
                  <option>Italy</option>
                  <option>Canada</option>
                  <option>Other</option>
                </select>
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" placeholder="Subject *" name = "subject" id = "subject" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                  <textarea class="form-control" rows="3" name = "textArea"  id = "textArea" required></textarea>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 text-center">
                   <button type="submit" class="btn btn-primary" name = "submit" id = "Contact"><i class="fas fa-paper-plane"></i> Send Message</button>
                   <!--i class="fas fa-paper-plane"></i><input type="submit" class="form-control name = "submit" class="btn btn-primary" value="Send Message"-->

                </div>
             </div>
         </form>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">

			$ (function(){
				$('#Contact').click(function(e){

					var valid = this.form.checkValidity();
					if(valid){
						

					var fullname 	= $('#fullname').val();
					var email 		= $('#email').val();
					var contactNo	= $('#contactNo').val();
					var country 	= $('#country').val();
					var subject 	= $('#subject').val();
					var textArea 	= $('#textArea').val();

						e.preventDefault();

						$.ajax({

							type: 'POST',
							url: 'process_contact.php',
							data:{fullname: fullname ,email: email , contactNo: contactNo , country: country, subject: subject , textArea: textArea},
								success: function(data){
									swal.fire({
										'icon' : 'success',
										'title' : 'Thank You!',
										'text'  : 'We will reply you soon',
										'type'  : 'success'
										})

								},

								error: function(data){
									swal.fire({
										'icon' : 'error',
										'title' : 'Message Sending Failed!',
										'text'  : 'Please refill the form',
										'type'  : 'error'
										})

								}

							});

						
					}
					else{
						
						}
				
				});
			
			});

		</script>


		    


        <div class="col-md-6 address">
            <h5><b>Call Us / WhatsApp</b></h5>
            <p><a href="tel:+94 112970285"><i class="fas fa-phone"></i>+(94)112970285 </a><br>
            </p>
            <h5><b>Email / Website</b></h5>
            <p>
               <a href="mailto:safaritolanka.srilanka@gmail.com"><i class="fas fa-envelope"></i> safaritolanka.srilanka@gmail.com</a><br>
               <a href="https://www.safaritolanka.srilanka.lk"><i class="fas fa-globe"></i> www.safaritolanka.srilanka.lk </a>

            </p>
            <h5><b>Working hours</b></h5>
            <p>
               Mon - Fri : 8am - 6pm (IST)
            </p>
            <h5><b>Address</b></h5>
            <p>
               No.138, Main Street , Cinnamon Gardens , Colombo 7, Sri Lanka.
            </p>
         </div>
      </div>
    </div>
  </section>

   <section>
      <div class="container-fluid">
         <!-- <iframe class="embed-responsive-item" src="..."></iframe> -->
         
            <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=cinnamon%20garden%2C%20colombo%207+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates finder</a></iframe></div><br />

      </div>


   </section>






		<footer class="container-fluid text-center">
			<div class="row">
				<div class="col-sm-4">
					<h3>Contact us<h3>
						<br>
						<h4>Our address and contact info here</h4>
				</div>


				<div class="col-sm-4">
					<h3>Connect</h3>
					<a href="#" class="fa fa-facebook"></a>

					<a href="#" class="fa fa-twitter"></a>

					<a href="#" class="fa fa-google"></a>

					<a href="#" class="fa fa-linkedin"></a>

					<a href="#" class="fa fa-youtube"></a>



				</div>


				<div class="col-sm-4">
					<img src="img/lanka4.png" class="icon">
					    <br>
				      <a href="#" class="badge badge-secondary">Home</a>
				      <a href="mytest.php" class="badge badge-secondary">About</a>
				      <a href="pak.php" class="badge badge-secondary">Packages</a>
				      <a href="login.php" class="badge badge-secondary">Plan my trip</a>
				      <a href="join.php" class="badge badge-secondary">Join with us</a>
				      <a href="contact us.php" class="badge badge-secondary">Contact</a>

				</div>


			</div>
			</footer>

			</body>
			</html>
	