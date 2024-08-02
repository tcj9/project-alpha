<!-- register.php -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<?php include './assets/scripts/php/global/head_import.php'; ?>
	<title>Register - ServiceConnect</title>
	<link rel="stylesheet" href="./assets/styles/auth.css" />
</head>

<body>
	<main id="register-app" class="hero is-fullheight">
		<div class="hero-body is-flex is-justify-content-center has-text-centered">
			<div class="columns">
				<div class="column">
					<div v-if="message" :class="['notification is-light', messageType]">
						{{ message }}
					</div>
					<div class="form-card">
						<section class="block py-2">
							<h1 class="title is-2">Register</h1>
						</section>
						<form @submit.prevent="registerUser">
							<div class="field">
								<div class="control">
									<input @input="clearMessage" class="input" type="text" v-model="username"
										placeholder="Username" autocomplete="username" required />
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input @input="clearMessage" class="input" type="email" v-model="email"
										placeholder="Email" autocomplete="email" required />
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input @input="clearMessage" class="input" type="password" v-model="password"
										required placeholder="Password" autocomplete="new-password" required />
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
								<a href="./login.php" class="has-text-dark">
									Already Have An Account?
								</a>
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
	<script src="./assets/scripts/js/register.js"></script>
</body>

</html>