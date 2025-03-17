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

var_dump($activities);
