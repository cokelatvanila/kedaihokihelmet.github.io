<?php

	include "pages/header.php";

?>
<!-----HEADER----->

<!------MAIN----->
<!--content-->
<!--login-->
<div class="content">
	<div class="container">
		<div class="login">
			<form>
				<div class="col-md-6 login-do">
					<div class="login-mail">
						<input type="text" placeholder="Username" required="">
					</div>
					<div class="login-mail">
						<input type="password" placeholder="Password" required="">
					</div>
					<a class="news-letter " href="#">
						<label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					</a>
					<label class="hvr-skew-backward">
						<input type="submit" value="Login">
					</label>
				</div>
				<div class="col-md-6 login-right">
					<h3>Completely Free Account</h3>
					<p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
					<a href="register.php" class=" hvr-skew-backward">Register</a>
				</div>
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
</div>
<!--login-->
<!--brand-->
<div class="container">
	<div class="brand">
		<div class="clearfix"></div>
	</div>
</div>
<!--brand-->
<!--content-->
<!------MAIN----->

<!------FOOTER----->
<?php include "pages/footer.php"; ?>
<?php ?>