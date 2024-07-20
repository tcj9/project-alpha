<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ServiceConnect</title>
    <link rel="stylesheet" href="libs/bulma.min.css">
    <link rel="stylesheet" href="styles/global.css">
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
                                    <label class="label">Username</label>
                                    <div class="control">
                                        <input class="input is-medium" type="text" v-model="username" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control">
                                        <input class="input is-medium" type="email" v-model="email" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Password</label>
                                    <div class="control">
                                        <input class="input is-medium" type="password" v-model="password" required>
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
    <?php include 'scripts/php/footer.php'; ?>
    <script src="libs/vue.min.js"></script>
    <script src="scripts/js/register.js"></script>
</body>

</html>