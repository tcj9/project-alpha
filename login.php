<!-- login.php -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<?php include 'scripts/php/global_head_import.php'; ?>
	<title>Login - ServiceConnect</title>
	<link rel="stylesheet" href="styles/login.css">
</head>

<body>
	<?php include 'scripts/php/header.php'; ?>
	<div id="login-app">
		<section class="hero is-fullheight">
			<div class="hero-body has-text-centered">
				<div class="login">
					<form @submit.prevent="loginUser">
						<div class="field">
							<div class="control">
								<input class="input is-medium is-rounded" type="text" v-model="username" placeholder="Username"
									autocomplete="username" required />
							</div>
						</div>

						<div class="field">
							<div class="control">
								<input class="input is-medium is-rounded" type="password" v-model="username" required
									placeholder="Password" autocomplete="current-password" required />
							</div>
						</div>
						<br />
						<button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit">
							Login
						</button>
					</form>
					<br>
					<nav class="level">
						<div class="level-item has-text-centered">
							<div>
								<a href="#">Forgot Password?</a>
							</div>
						</div>
						<div class="level-item has-text-centered">
							<div>
								<a href="#">Create an Account</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>
	</div>
	<?php include 'scripts/php/footer.php'; ?>
	<script src="libs/vue.global.min.js"></script>
	<script src="scripts/js/login.js"></script>
</body>

</html>