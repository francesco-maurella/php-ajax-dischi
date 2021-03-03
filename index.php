<?php
require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JAVASCRIPT - PHP / AJAX [Dischi - Milestone#1]</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- TOP-BAR HEADER -->
    <header>
      <div class="container al-cntr flx">
        <img src="database/img/00-logo.png" alt="logo">
      </div>
    </header>
    <!-- / TOP-BAR HEADER -->

    <!-- MAIN DISC-LIST CONTENT -->
    <main class="cds-container flx container">
      <!-- Disc element -->
      <?php
      foreach ($discs as $disc) {
        ?>
        <div class="cd al-cntr flx">
          <img src="<?php echo $disc['poster'] ?>" alt="poster">
          <h3><?php echo $disc['title'] ?></h3>
          <span class="author"><?php echo $disc['author'] ?></span>
          <span class="year"><?php echo $disc['year'] ?></span>
        </div>
        <?php
      }
       ?>
      <!-- / Disc element -->
    </main>
    <!-- / MAIN DISC-LIST CONTENT -->

  </body>
</html>
