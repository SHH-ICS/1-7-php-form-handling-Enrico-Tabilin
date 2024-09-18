<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>form jumpscare</title>
  </head>

  <body>
    <!-- Uses a header that scrolls with the text, rather than staying
      locked at the top -->
    <div class="mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--scroll">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Crazy? I was crazy once!</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="./index.html">Link1</a>
            <a class="mdl-navigation__link" href="">Link2</a>
            <a class="mdl-navigation__link" href="">Link3</a>
            <a class="mdl-navigation__link" href="">Link4</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">crazy? i was crazy once</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="./index.html">Link1</a>
          <a class="mdl-navigation__link" href="">Link2</a>
          <a class="mdl-navigation__link" href="">Link3</a>
          <a class="mdl-navigation__link" href="">Link4</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
          <h1>Hello, World!</h1>
          <!-- Simple Textfield -->
          <form action="handler.php" method="POST">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="sample1" name="userName">
              <label class="mdl-textfield__label" for="sample1">Name:</label>
            </div><!-- Raised button with ripple -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
              Submit
            </button>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>