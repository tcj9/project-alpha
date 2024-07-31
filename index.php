<!-- index.php -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <?php include 'assets/scripts/php/global/head_import.php'; ?>
  <title>ServiceConnect</title>
  <link rel="stylesheet" href="./assets/styles/index-anon.css" />
</head>

<body>
  <main id="app" class="hero is-white is-fullheight">
    <div class="hero-body">
      <div class="container is-fullhd">
        <div class="columns is-vcentered reverse-columns">
          <section class="column is-half">
            <h1 class="title is-2">Welcome To ServiceConnect</h1>
            <h2 class="subtitle is-5">
              Showcase Your Brand. Find One Near You.
            </h2>
            <div class="buttons">
              <a href="./login.php" class="button is-primary">Use Existing Account</a>
              <a href="./register.php" class="button is-primary is-light">Create New Account</a>
            </div>
          </section>
          <section class="column is-half is-flex is-justify-content-center">
            <figure class="image">
              <img :src="homepageImg" />
            </figure>
          </section>
        </div>
      </div>
    </div>
    <div class="hero-foot has-background-light has-text-centered">
      <p class="has-text-dark">
        &copy; {{currentYear}} ServiceConnect. All rights reserved.
      </p>
    </div>
  </main>
  <?php include './assets/scripts/php/global/foot_import.php'; ?>
  <script src="./assets/scripts/js/index-anon.js"></script>
</body>

</html>