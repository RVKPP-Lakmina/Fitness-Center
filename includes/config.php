<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Database.class.php';
    $database = new Database();
    $conn = $database->connect();

    if ($conn) {
        echo "Database connected successfully!";
    } else {
        echo "Failed to connect.";
    }
    ?>
</body>

</html>