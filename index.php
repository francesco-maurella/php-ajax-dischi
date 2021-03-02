<?php
require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JAVASCRIPT - PHP / AJAX [Dischi]</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" css/style.css">
  </head>
  <body>

    <!-- TOP-BAR HEADER -->
    <header>
      <div class="container al-cntr flx">
        <img src="img/logo.png" alt="logo">
        <nav class="selectors">
          <select>
            <option disabled value="">Filter by Gender</option>
            <option>Gender</option>
          </select>
        </nav>
      </div>
    </header>
    <!-- / TOP-BAR HEADER -->

    <!-- MAIN DISC-LIST CONTENT -->
    <main class="cds-container flx container">
      <!-- Disc element -->
      <div class="cd al-cntr flx">
        <img src="disc.poster" alt="poster">
        <h3>Disc title</h3>
        <span class="author">Disc author</span>
        <span class="year">Disc year</span>
      </div>
      <!-- / Disc element -->
    </main>
    <!-- / MAIN DISC-LIST CONTENT -->

  </body>
</html>
