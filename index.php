<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>
</head>

<body>
    <h1>Welcome to My PHP Website</h1>
    <p><?php echo "Hello, World! This is PHP."; ?></p>
</body>

</html>