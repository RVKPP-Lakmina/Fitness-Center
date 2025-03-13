<header class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="/" class="logo">
            <svg class="logo-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l14-8v16l-14-8z" />
            </svg>
            <span class="logo-text">FitLife</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-links">
            <?php
            $navLinks = [
                ["name" => "Home", "href" => "/fitness-site/index.php"],
                ["name" => "About", "href" => "/about"],
                ["name" => "Classes", "href" => "/classes"],
                ["name" => "Trainers", "href" => "/trainers"],
                ["name" => "Membership", "href" => "/membership"],
                ["name" => "Contact", "href" => "/contact"],
            ];

            foreach ($navLinks as $link) {
                $activeClass = ($_SERVER['REQUEST_URI'] == $link["href"]) ? "active" : "";
                echo "<a href='{$link["href"]}' class='nav-item $activeClass'>{$link["name"]}</a>";
            }
            ?>
        </nav>

        <!-- CTA Button -->
        <a href="/membership" class="cta-button">Join Now</a>

        <!-- Mobile Menu -->
        <button class="menu-button" id="menu-toggle">
            <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Mobile Menu Content -->
        <div class="mobile-menu" id="mobile-menu">
            <button class="close-button" id="menu-close">
                <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <nav class="mobile-nav">
                <?php
                foreach ($navLinks as $link) {
                    echo "<a href='{$link["href"]}' class='mobile-nav-item'>{$link["name"]}</a>";
                }
                ?>
            </nav>
            <a href="/membership" class="mobile-cta">Join Now</a>
        </div>
    </div>
</header>