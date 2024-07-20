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
		<section class="container">
			<div class="columns is-multiline">
				<div class="column is-8 is-offset-2 register">
					<div class="columns">
						<div class="column left">
							<h1 class="title is-1">Super Cool Website</h1>
							<h2 class="subtitle colored is-4">Lorem ipsum dolor sit amet.</h2>
							<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ex deleniti aliquam
								tempora libero excepturi vero soluta odio optio sed.</p>
						</div>
						<div class="column right has-text-centered">
							<h1 class="title is-4">Sign up today</h1>
							<p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>
							<form @submit.prevent="registerUser">
								<div class="field">
									<div class="control">
										<input class="input is-medium" type="text" v-model="username" placeholder="Username" required>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input class="input is-medium" type="email" v-model="email" placeholder="Email" required>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input class="input is-medium" type="password" v-model="password" placeholder="Password" required>
									</div>
								</div>
								<button class="button is-block is-primary is-fullwidth is-medium">Submit</button>
								<br />
								<small><em>Lorem ipsum dolor sit amet consectetur.</em></small>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="libs/vue.min.js"></script>
	<script src="scripts/js/register.js"></script>
</body>

</html>