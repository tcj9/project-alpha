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





<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register - ServiceConnect</title>
	<link rel="stylesheet" href="libs/bulma.min.css">
	<link rel="stylesheet" href="styles/global.css">
	<link rel="stylesheet" href="styles/auth.css">
</head>
<body>
	<?php include 'scripts/php/header.php'; ?>
	<div id="register-app">
		<section class="section">
			<div class="container">
				<h1 class="title">Register</h1>
				<form @submit.prevent="registerUser">
					<div class="field">
						<label class="label">Username</label>
						<div class="control">
							<input class="input" type="text" v-model="username" required>
						</div>
					</div>
					<div class="field">
						<label class="label">Email</label>
						<div class="control">
							<input class="input" type="email" v-model="email" required>
						</div>
					</div>
					<div class="field">
						<label class="label">Password</label>
						<div class="control">
							<input class="input" type="password" v-model="password" required>
						</div>
					</div>
					<div class="field">
						<div class="control">
							<button class="button is-primary" type="submit">Register</button>
						</div>
					</div>
				</form>
				<div v-if="message" :class="['notification', messageType]">
					{{ message }}
				</div>
			</div>
		</section>
	</div>
	<?php include 'scripts/php/footer.php'; ?>
	<script src="libs/vue.global.min.js"></script>
	<script src="scripts/js/register.js"></script>
</body>
</html> -->