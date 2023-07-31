<?php include_once "inc/header.php" ?>

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

<?php include_once "inc/footer.php" ?>
