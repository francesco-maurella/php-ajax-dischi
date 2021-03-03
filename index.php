<?php
require_once __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JAVASCRIPT - PHP / AJAX [Dischi - Milestone#1]</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="wrapper">

      <!-- TOP-BAR HEADER -->
      <header class="top-bar">
        <div class="container">
          <img src="img/00-logo.png" alt="logo">
        </div>
      </header>
      <!-- / TOP-BAR HEADER -->

      <!-- MAIN DISC-LIST CONTENT -->
      <main class="main">
        <div class="container">
          <ul class="main-cds-list">
            <!-- Disc element -->
            <?php
            foreach ($discs as $disc) {
              ?>
              <li class="main-cds-list-elm">
                <div class="title">
                  <img src="<?php echo $disc['poster'] ?>" alt="poster">
                  <div><?php echo $disc['title'] ?></div>
                </div>
                <div class="data">
                  <div><?php echo $disc['artist'] ?></div>
                  <div><?php echo $disc['year'] ?></div>
                </div>
              </li>
              <?php
            }
            ?>
            <!-- / Disc element -->
          </ul>
        </div>
      </main>
      <!-- / MAIN DISC-LIST CONTENT -->
      
    </div>

  </body>
</html>
