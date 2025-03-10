<?php include '../../includes/header.php'; ?>

<h1>All Activities</h1>
<div class="activity-list">
    <?php
    require_once '../../includes/config.php';
    $query = 'SELECT * FROM activities';
    $stmt = $db->prepare($query);
    $stmt->execute();
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="activity-item">';
        echo '<h3><a href="view.php?id='.$row['id'].'">'.$row['name'].'</a></h3>';
        echo '<p>'.$row['description'].'</p>';
        echo '</div>';
    }
    ?>
</div>

<?php include '../../includes/footer.php'; ?>