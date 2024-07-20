<!DOCTYPE html>
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
            </div>
        </section>
    </div>
    <?php include 'scripts/php/footer.php'; ?>
    <script src="libs/vue.min.js"></script>
    <script src="scripts/js/register.js"></script>
</body>

</html>