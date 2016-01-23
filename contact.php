	<?php include('sass/partials/header_template.php');?>
	<main>
		<section>
			<table>
				<form>
					<tr>
						<td>
							<h3>Contact us</h3>
						</td>
					</tr>
					<tr>
						<td>
							<span></span>
						</td>
					</tr>
					<tr>
						<td>
							<h3>Full name</h3>
							<input type="text" name="fullname" placeholder="Full name">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Email</h3>
							<input type="email" name="email" placeholder="Email">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Phone number</h3>
							<input type="text" name="phone" placeholder="Phone">
						</td>
					</tr>
					<tr>
						<td>
							<h3>Subject</h3>
							<input type="password" name="confirm" placeholder="Confirm password">
						</td>
					</tr>
					<tr>
						<td class="message">
							<h3>Message</h3>
							<textarea type="text" name="message" placeholder="Type message">
								
							</textarea>
						</td>
					</tr>
					<tr>
						<td>
							<button name="Register">Validate</button>
						</td>
					</tr>
				</form>
			</table>
			<section>
				<h2> Already a member ?<a href="login.php">login!!!</a></h2>	<h2> Not a member ?<a href="register.php">Register!!!</a></h2>
			</section>
		</section>
	</main>




	<?php include('sass/partials/footer_template.php');?>
