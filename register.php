<?php require_once("header.php"); ?>
<div class="container my-2">
  <div class="row">
    <div class="col-lg-12">
      <img src="image4.jpg" alt="" class="img-fluid">
    </div>
  </div>
</div>
<div class="container my-2">
	<div class="row mt-5">
		<div class="col-lg-6 mx-auto">
			<card class="mt-5 border-dark">
			<div class="card-title">
				<h4>Register</h4>
				<div class="card-body">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="form-group">
						<input type="text" name="name" id="name" placeholder="Username*" required="" />							
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" placeholder="Email*" required="" />					
						</div>
						<div class="form-group">
							<input type="password" name="password" id="password" placeholder="Password*" required="" />
						</div>
						<div class="form-group">
						<input type="password" name="password2" id="password2" placeholder="Password again*" required="" />
						</div>
						<button class="button btn btn-dark btn-block" type="submit">
										Register
						</button>
					</form>
				</div>
			</div>
		</card>
		</div>		
	</div>
</div>



							
						
							
								
						


<?php 
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name=sanitizeString($_POST["name"]);
		$email=sanitizeString($_POST["email"]);
		$password=sanitizeString($_POST["password"]);
		$password2=sanitizeString($_POST["password2"]);
		$nameCheck=queryMysql("SELECT userName FROM users WHERE userName='$name'");
		$mailCheck=queryMysql("SELECT email FROM users WHERE email='$email'");
		if ($nameCheck->num_rows){echo "Username is taken";}
		elseif($mailCheck->num_rows){echo "E-mail address is in use";}
		elseif($password!=$password2){echo "Passwords don't match";}
		else{
			$password=password_hash($password,PASSWORD_DEFAULT);
			queryMysql("INSERT INTO users(userName, email,pass) VALUES('$name','$email','$password')");
			echo "<p>You are registered</p>";
		}
		}
					require_once("footer.php"); ?>