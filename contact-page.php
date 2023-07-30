<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-page.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <p>Contact Us</p>
            <form class="form" action="contact-form.php" method="post">
                <input type="text" name="name" placeholder="Full name">
                <br>
                <br>
                <input type="text" name="mail" placeholder="Your e-mail">
                <br>
                <br>
                <input type="text" name="subject" placeholder="Subject">
                <br>
                <br>
                <textarea name="message" placeholder="Message"></textarea>
                <br>
                <br>
                <button type="submit" name="submit">SEND EMAIL</button>
            </form>
            <a href="index.php" class="previous">GO BACK</a>
        </div>
    </main>

    <footer class="footer bg-dark text-white mt-5 fixed-bottom">
        <p>&copy; 2023 Rapid Coins. All rights reserved.</p>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>