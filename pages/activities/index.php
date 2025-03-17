<?php
require_once 'includes/config.php';
require_once 'includes/Activity.class.php';
$api = new Api();

$response = $api->get('activities');
$activities = [];

if (is_array($response)) {
    foreach ($response as $activity) {
        if (isset($activity['id'], $activity['name'], $activity['brief_description'], $activity['benefits'], $activity['price'])) {
            $activities[] = new Activity($activity['id'], $activity['name'], $activity['brief_description'], $activity['benefits'], $activity['price']);
        }
    }
}
?>

<main style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; background-color: gray">
    <?php foreach ($activities as $activity) : ?>
        <section>
            <div class="card" id="activity-<?= $activity->getId() ?>">
                <h2><?= htmlspecialchars($activity->getName()) ?></h2>
                <p><?= htmlspecialchars($activity->getBriefDescription()) ?></p>
                <p><strong>Benefits:</strong> <?= htmlspecialchars($activity->getBenefits()) ?></p>
                <p class="price">Price: $<?= htmlspecialchars($activity->getPrice()) ?></p>
            </div>
        </section>
    <?php endforeach; ?>
</main>