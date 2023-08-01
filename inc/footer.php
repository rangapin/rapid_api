
<footer class="footer bg-dark text-white mt-5 fixed-bottom">
        <p>&copy; 2023 Rapid Coins. All rights reserved.</p>
</footer>

<script>
        function showConfirmation() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "contact-form.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText === 'success') {
                        alert('Email sent successfully.');
                    } else {
                        alert('Error sending email.');
                    }
                }
            };
            xhr.send("send_email=true");
            return false; 
        }
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>