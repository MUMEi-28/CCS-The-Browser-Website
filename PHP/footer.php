<footer>
    <div class="socials">
        <p>Follow Us.</p><br>
        <ul class="icons">
            <li><a href="https://www.facebook.com/CCSTheBrowser/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
        </ul>
    </div>

    <hr>

    <div class="logo">

        <!-- MAKE SURE IT ALSO WORKS ON THE INDEX.PHP -->
        <?php
        $logoPath = "../Assets/LOGO-AY-24-25/LOGO-mejo-3D.png";

        if (file_exists($logoPath) && !is_dir($logoPath)) {
            echo '<img src="' . htmlspecialchars($logoPath) . '" alt="Banner" class="header-logo">';
        } else {
            echo '<img src="' . htmlspecialchars("Assets/LOGO-AY-24-25/LOGO-mejo-3D.png") . '" alt="Banner" class="header-logo">';
        }
        ?>
        <h3>minds poured out on paper.</h3>
    </div>

    <ul class="about">
        <li><a href="">About Us</a></li>
        <li><a href="">Privacy Policy</a></li>
    </ul>

    <p class="copyright">Copyright 2024 TSU-CCS The Browser. All rights reserved.</p>

</footer>