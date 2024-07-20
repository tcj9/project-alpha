<!-- register.php -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<?php include 'scripts/php/global_head_import.php'; ?>
	<title>Register - ServiceConnect</title>
	<link rel="stylesheet" href="styles/auth.css">
</head>

<body>
	<?php include 'scripts/php/header.php'; ?>
	<div id="register-app">
		<section class="hero is-fullheight">
			<div class="hero-body has-text-centered">
				<div class="form-card">
					<form @submit.prevent="registerUser">
						<div class="field">
							<div class="control">
								<input class="input is-medium is-rounded" type="text" v-model="username" placeholder="Username"
									autocomplete="username" required />
							</div>
						</div>
						<div class="field">
							<div class="control">
								<input class="input is-medium is-rounded" type="email" v-model="email" placeholder="Email"
									autocomplete="email" required />
							</div>
						</div>
						<div class="field">
							<div class="control">
								<input class="input is-medium is-rounded" type="password" v-model="password" required
									placeholder="Password" autocomplete="current-password" required />
							</div>
						</div>
						<br />
						<button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit">
							Register
						</button>
					</form>
					<br>
					<nav class="level">
						<div class="level-item has-text-centered">
							<div>
								<a href="/login.php">Already Have An Account</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</section>

	</div>
	<script src="libs/vue.min.js"></script>
	<script src="scripts/js/register.js"></script>
</body>

</html>