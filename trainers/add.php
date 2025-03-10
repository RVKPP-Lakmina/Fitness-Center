<?php include '../../includes/header.php'; ?>

<h1>Add New Trainer</h1>
<form action="../../process_trainer.php" method="POST">
    <label>Full Name: <input type="text" name="full_name" required></label>
    <label>Email: <input type="email" name="email" required></label>
    <label>Phone: <input type="tel" name="phone"></label>
    <label>Specialization: <input type="text" name="specialization"></label>
    <label>Activity:
        <select name="activity_id">
            <?php
            require_once '../../includes/config.php';
            $query = 'SELECT * FROM activities';
            $stmt = $db->prepare($query);
            $stmt->execute();
            
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
            ?>
        </select>
    </label>
    <button type="submit" name="add_trainer">Add Trainer</button>
</form>

<?php include '../../includes/footer.php'; ?>