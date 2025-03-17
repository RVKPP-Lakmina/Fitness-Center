<header class="navbar">
    <div class="navbar-container" id="navbarContainer">
        <a href="?page=main/index" class="logo">
            <span class="logo-icon">
                <i class='fas fa-dumbbell' style='font-size:24px; rotate: 30deg'></i>
            </span>
            <span class="logo-text">FitLife</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-links">
            <?php
            $navLinks = [
                ["name" => "Home", "href" => "?page=main/index"],
                ["name" => "Activities", "href" => "?page=activities/index"],
                ["name" => "Trainers", "href" => "?page=trainers/index"],
                ["name" => "Membership", "href" => "?page=main/index"],
            ];

            foreach ($navLinks as $link) {
                $cleanPage = str_replace('?page=', '', $link["href"] ?? '');
                $activeClass = ($_GET['page'] == $cleanPage) ? "active" : "";
                echo "<a href='{$link["href"]}' class='nav-item $activeClass'>{$link["name"]}</a>";
            }
            ?>
        </nav>

        <!-- CTA Button -->
        <a href="/membership" class="nav-cta-button">Join Now</a>
    </div>
</header>



<!-- <button class="menu-button" id="menu-toggle">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button> -->

<!-- <div class="mobile-menu" id="mobile-menu">
            <button class="close-button" id="menu-close">
                <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <nav class="mobile-nav">
                           foreach ($navLinks as $link) {
                    echo "<a href='{$link["href"]}' class='mobile-nav-item'>{$link["name"]}</a>";
                }
            </nav>
            <a href="/membership" class="mobile-cta">Join Now</a>
        </div> -->