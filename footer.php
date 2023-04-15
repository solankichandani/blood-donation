 <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informations</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>New Jaganath Main Road, Opposite Astron Garden, Beside Mehta Medical, Sardarnagar, Rajkot, Gujarat 360003</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>@blooddonation.com <br> support@chandani.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Contacts</li>
                        <li>Pricing</li>
                        <li>Gallery</li>
                        <li>eatures</li>

                    </ul>
                    </div>
                  

                </div>
				<?php
						require "config.php";
						if(isset($_REQUEST['name']))
						{
							$nm=($_REQUEST['name']);
							$no=($_REQUEST['contact']);
							$em=($_REQUEST['email']);
							$meg=($_REQUEST['mes']);
							$int="INSERT INTO `message`( `name`, `contact`, `email`, `message`) VALUES ('$nm','$no','$em','$meg')";
							$data=mysqli_query($con,$int);
							
						}
							
						?>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
						
                        <div class="form-body">
						<form action="index.php" method="POST">
                            <input type="text"  name="name" class="form-control" placeholder="Name Here!" required />
                            <input type="text"  name="contact" placeholder="Enter Mobile no" class="form-control" required>
                            <input type="email" name="email" placeholder="Enter Email Address" class="form-control"required>
                            <input type="text" name="mes" placeholder="Your Message" class="form-control" required>
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
						</form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com">@blooddonation.com</a> | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    