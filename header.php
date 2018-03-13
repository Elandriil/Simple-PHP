<?php session_start(); 
require_once("config.php");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bt.css">

    <title>Simple Movies</title>
  </head>
  <body>
		<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Simple Movies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
				</li>
				
				<?php 
								if(checkSession()===true){
								echo "<li class='nav-item'><a class='nav-link' href='logout.php'>| Logout</a></li>
								<li class='nav-item'><a class='nav-link' href='admin.php'>Admin</a>
										<li class='nav-item'><a  class='nav-link' href=\"admin.php\">Movies</a></li>
										<li class='nav-item'><a  class='nav-link' href=\"usersAdmin.php\">Users</a></li>			
								<li class='nav-item'><a class='nav-link'  href='#'>User: ".$_SESSION['user']."</a></li>";

								//header("Location:admin.php");
								//exit();
							}
								elseif(checkSession()===false){
								echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
								echo "<li class='nav-item'><a class='nav-link' href='admin.php'>User: ".$_SESSION['user']."</a></li>";
								//header("Location:index.php");
								//exit();
								}
								else{
								echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>
								
								<li class='nav-item'><a class='nav-link' href='register.php'>Register</a></li>";
								}
								?>

      </ul>
      <form class="form-inline"  method='get' action="search.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
	</nav>
</div>