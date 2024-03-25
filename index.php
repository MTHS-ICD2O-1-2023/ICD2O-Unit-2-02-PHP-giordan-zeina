<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The math program, in PHP" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Giordan Zeina" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>The Area and Perimeter program,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area and perimeter program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_and_perimeter.png" alt="area and perimeter image" />
      </div>
        <p style="font-size: x-large">The dimensions of a rectangle are: 5cm and 3cm </p>
      <div class="page-content">
        <?php echo '<p>The Area is:  ' . 5 + 3 . ' cm². </p>'; ?>
        <?php echo '<p>The Perimeter is:  ' . 2 * (5 + 3) . ' cm. </p>'; ?>
      </div>
      <br />
    </main>
    </div>
  </body>
</html>
