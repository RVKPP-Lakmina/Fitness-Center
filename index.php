<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="assets/scripts/navbar.js" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Fitness Site</title>
</head>

<body>
    <?php
    // include_once 'includes/header.php';
    // include_once 'includes/navigation.php';
    ?>
    <?php include 'includes/navbar.php'; ?>
    <main class="main-container">
        <section class="hero-section">
            <div class="hero-background">
                <img src="assets/images/hero.jpg" alt="Fitness Hero" class="hero-image">
            </div>
            <div class="hero-content">
                <h1 class="hero-title">Transform Your Body, Transform Your Life</h1>
                <p class="hero-subtitle">Join our fitness community and start your journey today.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">Start Free Trial</a>
                    <a href="#" class="btn-secondary">Learn More</a>
                </div>
            </div>
        </section>

        <section class="features-section">
            <div class="features-container">
                <h2 class="features-title">Why Choose Us</h2>
                <div class="features-grid">
                    <?php
                    $features = [
                        ["title" => "Expert Trainers", "description" => "Certified trainers help you reach your goals.", "icon" => "💪"],
                        ["title" => "Modern Equipment", "description" => "State-of-the-art fitness facilities.", "icon" => "🏋️"],
                        ["title" => "Supportive Community", "description" => "A community that supports your journey.", "icon" => "👥"]
                    ];
                    foreach ($features as $feature) {
                        echo "<div class='feature-box'>";
                        echo "<div class='feature-icon'>{$feature['icon']}</div>";
                        echo "<h3 class='feature-title'>{$feature['title']}</h3>";
                        echo "<p class='feature-description'>{$feature['description']}</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="membership-section">
            <div class="membership-container">
                <h2 class="section-title">Membership Plans</h2>
                <p class="section-subtitle">
                    Choose the plan that fits your fitness goals and budget
                </p>
                <div class="membership-grid">
                    <?php
                    $plans = [
                        [
                            "title" => "Basic",
                            "price" => "$29",
                            "features" => ["Access to gym floor", "Basic equipment", "Locker access", "Online workout plans"],
                            "cta" => "Get Started",
                            "highlighted" => false
                        ],
                        [
                            "title" => "Premium",
                            "price" => "$59",
                            "features" => ["Full gym access", "Group classes", "Personal trainer (1x/month)", "Nutrition consultation"],
                            "cta" => "Join Now",
                            "highlighted" => true
                        ],
                        [
                            "title" => "Elite",
                            "price" => "$99",
                            "features" => ["24/7 gym access", "Unlimited classes", "Weekly personal training", "Nutrition planning"],
                            "cta" => "Go Elite",
                            "highlighted" => false
                        ]
                    ];

                    foreach ($plans as $plan) {
                        $highlightClass = $plan["highlighted"] ? "highlighted-plan" : "";
                        echo "<div class='membership-card $highlightClass'>
                        <div class='card-header'>
                            <h3 class='card-title'>{$plan["title"]}</h3>
                            <p class='card-price'>{$plan["price"]} <span>/ month</span></p>
                        </div>
                        <div class='card-content'>
                            <ul class='features-list'>";
                        foreach ($plan["features"] as $feature) {
                            echo "<li class='feature-item'>
                            <span class='check-icon'>&#10003;</span> $feature
                          </li>";
                        }
                        echo "      </ul>
                        </div>
                        <div class='card-footer'>
                            <button class='cta-button'>$plan[cta]</button>
                        </div>
                      </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="container">
                <h2 class="testimonials-section-title">What Our Members Say</h2>
                <div class="testimonials-grid">
                    <?php
                    $testimonials = [
                        [
                            "name" => "Sarah Johnson",
                            "quote" => "Joining this gym was the best decision I made this year. I've lost 20 pounds and gained so much confidence!",
                            "image" => "assets/images/Johnson.jpg",
                        ],
                        [
                            "name" => "Mike Thompson",
                            "quote" => "The trainers here are amazing. They pushed me to achieve goals I never thought possible.",
                            "image" => "assets/images/Mike.jpg",
                        ],
                        [
                            "name" => "Lisa Chen",
                            "quote" => "I love the community here. Everyone is so supportive and it makes working out so much more enjoyable.",
                            "image" => "assets/images/lisa.jpg",
                        ],
                    ];

                    foreach ($testimonials as $testimonial) {
                        echo "<div class='testimonial-card'>
                        <div class='testimonial-header'>
                            <div class='testimonial-image'>
                                <img src='{$testimonial["image"]}' alt='{$testimonial["name"]}'>
                            </div>
                            <h3 class='testimonial-name'>{$testimonial["name"]}</h3>
                        </div>
                        <p class='testimonial-quote'>\"{$testimonial["quote"]}\"</p>
                      </div>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-container">
                <div class="form-wrapper">
                    <h2 class="section-title">Get In Touch</h2>
                    <form action="process_contact.php" method="POST" class="contact-form">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Your email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Your message" required></textarea>
                        </div>
                        <button type="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php
    include_once 'includes/footer.php';
    ?>
</body>

</html>