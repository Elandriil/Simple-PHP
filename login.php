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
				<h4>Login</h4>
				<div class="card-body">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<div class="form-group">
										<input class="form-control" type="text" name="userName" id="name" placeholder="User Name*" required="" />		
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" id="email" placeholder="password*" required="" />
									</div>
									<button class="button btn btn-dark btn-block" type="submit">
										Login
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
						$name=sanitizeString($_POST["userName"]);
						$pass=sanitizeString($_POST["password"]);
						$result=queryMysql("SELECT * FROM users where userName='$name'");
						if ($result->num_rows) {
							$row=$result->fetch_array(MYSQLI_ASSOC);
							if (password_verify($pass,$row['pass'])) {
								if($row["isAdmin"]==1){$_SESSION["auth"]="admin";
									header("Location:admin.php");}
								else{$_SESSION["auth"]="user";
									header("Location:index.php");}
                                $_SESSION['user']=$row['userName'];
							}
							else{echo "Incorrect password";}
						}
						else{echo "No such user!";}
				}
					require_once("footer.php"); ?>