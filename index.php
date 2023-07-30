<?php include "curl.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapid Coins</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Rapid Coins</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <!-- Navigation links here -->
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="grid-container">
    <?php

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data = json_decode($response, true);
        if ($data) {
            foreach ($data['data']['coins'] as $coin) {
                echo '<div>';
                echo "Name: " . $coin['name'] . '<br>';
                echo "Symbol: " . $coin['symbol'] . '<br>';
                echo "Price: " . number_format($coin['price'], 2) . " USD" . '<br>';
                echo '</div>';
            }
        }
    } ?>
</div>

<footer class="footer bg-dark text-white mt-5 fixed-bottom">
    <p>&copy; 2023 Rapid Coins. All rights reserved.</p>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>