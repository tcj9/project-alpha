<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ServiceConnect</title>
    <link rel="stylesheet" href="libs/bulma.min.css">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/auth.css">
</head>

<body>
    <?php include 'scripts/php/header.php'; ?>
    <div id="login-app">
        <section class="section">
            <div class="container">
                <h1 class="title">Login</h1>
                <form @submit.prevent="loginUser">
                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" v-model="username" required>
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
                            <button class="button is-primary" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <?php include 'scripts/php/footer.php'; ?>
    <script src="libs/vue.global.min.js"></script>
    <script src="scripts/js/login.js"></script>
</body>

</html>