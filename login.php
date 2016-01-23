<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<container>
		<header>
			<section class="top-nav">
				<a href="index.php">
					<img  class="homeButton" src="img/homeDisplayButton.png">
				</a>
				<h1>MariAlex Coding School</h1>
				<img src="img/logo.png" class="logo">
				<img id="menu_ic" class="menu_ic" src="img/menu_ic.png">
			</section>
			<nav id="mobile-nav" class="mobile-nav mobile">
				<ul>
					<li><a href="#"><img src="img/programs.png"><br>Programs</a></li>
					<li><a href="#"><img src="img/learn.png"><br> Learn</a></li>
					<li><a href="#"><img src="img/teach.png"><br>Teach</a></li>
					<li><a href="#"><img src="img/jobs.png"><br>Jobs</a></li>
					<li><a href="contact.php"><img src="img/contact.png"><br>Contact</a></li>
					<li><a href="#"><img src="img/about.png"><br>About</a></li>
				</ul>
			</nav>
			<section class='search_box'>
				<section class="search">
					<form>
						<input type="text" placeholder="Search our site...">
					</form>
				</section>
				<section class="search_ic">
					<img src="img/search_ic.png">
				</section>
			</section>
			<nav id="desktop-nav" class="desktop">
				<ul>
					<li><a href="#">Programs</a></li>
					<li><a href="#">Learn</a></li>
					<li><a href="#">Teach</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</nav>
			
			<section class="register-or-signin">
				<ul>
					<li><a href="register.php">Register</a></li>
				</ul>
			</section>
		</header>

		<main>
			<section>
				<table>
				<form>
					<tr>
						<td>
							<h3>Login</h3>
						</td>
					</tr>
					<tr>
						<td>
							<span></span>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Username</h3>
							<input type="text" name="username" placeholder="Username or email">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Password</h3>
							<input type="password" name="password" placeholder="Password">
						</td>
					</tr>
					<tr>
						<td>
							<button name="login">Submit</button>
						</td>
					</tr>
				</form>
			</table>
			<section>
				<h2>Forgot  <a href="#">passowrd</a></h2><h2>  or  <a href="register.php">new member ?</a></h2>
			</section>
			</section>
		</main>

<?php include('sass/partials/footer_template.php');?>