<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'main/index';
?>

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
    include 'includes/navbar.php';
    ?>

    <?php
    $allowedPages = ['main/index', 'activities/index', 'trainers/index'];
    if (in_array($page, $allowedPages)) {
        include "pages/$page.php";
    } else {
        echo "<h1>Page Not Found</h1>";
    }
    ?>

    <?php
    include_once 'includes/footer.php';
    ?>
</body>

</html>