<!-- login.php -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<?php include './assets/scripts/php/global/head_import.php'; ?>
	<title>Login - ServiceConnect</title>
	<link rel="stylesheet" href="./assets/styles/auth.css" />
</head>

<body>
	<main id="login-app" class="hero is-fullheight">
		<div class="hero-body is-flex is-justify-content-center has-text-centered">
			<div class="columns">
				<div class="column">
					<div v-if="message" :class="['notification is-light', messageType]">
						{{ message }}
					</div>
					<div class="form-card">
						<section class="block py-2">
							<h1 class="title is-2">Login</h1>
						</section>
						<form @submit.prevent="loginUser">
							<div class="field">
								<div class="control">
									<input @input="clearMessage" class="input" type="text" v-model="login"
										placeholder="Username or Email" autocomplete="username" required />
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input @input="clearMessage" class="input" type="password" v-model="password"
										placeholder="Password" autocomplete="current-password" required />
								</div>
							</div>
							<hr />
							<button class="button is-fullwidth is-primary" type="submit">
								Submit
							</button>
						</form>
						<br />
						<nav class="level">
							<div class="level-item has-text-centered">
								<div>
									<a href="./forgot-password" class="has-text-dark">Forgot Password?</a>
								</div>
							</div>
							<div class="level-item has-text-centered">
								<div>
									<a href="./register.php" class="has-text-dark">Create an Account</a>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-foot has-background-grey-lighter has-text-centered">
			<p class="has-text-dark">
				&copy; {{currentYear}} ServiceConnect. All rights reserved.
			</p>
		</div>
	</main>
	<?php include './assets/scripts/php/global/foot_import.php'; ?>
	<script src="./assets/scripts/js/login.js"></script>
</body>

</html>