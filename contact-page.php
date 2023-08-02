<?php include_once "inc/header.php" ?>

<main>
    <div class="form-container">
        <p>Contact Us</p>
        <form class="form" action="contact-form.php" method="post">
            <input type="text" name="name" placeholder="Full name" required>
            <br>
            <br>
            <input type="text" name="mail" placeholder="Your e-mail" required>
            <br>
            <br>
            <input type="text" name="subject" placeholder="Subject" required>
            <br>
            <br>
            <textarea name="message" placeholder="Message" required></textarea>
            <br>
            <br>
            <button type="submit" name="send_email">SEND EMAIL</button>
        </form>

        <a href="index.php" class="previous">GO BACK</a>
    </div>
</main>


<?php include_once "inc/footer.php" ?>
