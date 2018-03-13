<?php require_once("header.php"); ?>

<div class="container">
						<div class="row">
							
							
							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<p>*- required fields</p>
								<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name*" required="" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email*" required="" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message*" rows="5" required=""></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>



<?php 
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name=sanitizeString($_POST["name"]);
		$email=sanitizeString($_POST["email"]);
		$message=sanitizeString($_POST["message"]);
		if ($name!="" AND $email!="" AND $message!=""){
			queryMysql("INSERT INTO messages(name, email,message) VALUES('$name','$email','$message')");
			echo "<p>Message sent!</p>";
		}
		}
		
	
require_once("footer.php"); ?>