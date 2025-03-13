<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-section">
                <h3 class="footer-title">FitLife Gym</h3>
                <p class="footer-text">Transforming lives through fitness since 2010.</p>
            </div>
            <div class="footer-section">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-list">
                    <?php
                    $links = ["Home", "About", "Classes", "Trainers", "Contact"];
                    foreach ($links as $link) {
                        echo "<li><a href='#' class='footer-link'>$link</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="footer-section">
                <h4 class="footer-heading">Hours</h4>
                <div class="footer-text">
                    <p>Monday - Friday: 5am - 10pm</p>
                    <p>Saturday: 7am - 8pm</p>
                    <p>Sunday: 8am - 6pm</p>
                </div>
            </div>
            <div class="footer-section">
                <h4 class="footer-heading">Contact</h4>
                <address class="footer-text">
                    <p>123 Fitness Street</p>
                    <p>Workout City, WO 12345</p>
                    <p class="footer-email">info@fitlifegym.com</p>
                    <p>(123) 456-7890</p>
                </address>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> FitLife Gym. All rights reserved.</p>
        </div>
    </div>
</footer>