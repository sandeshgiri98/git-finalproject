<?php
function formatDateTime($dateTime) {
    $timeAgo = '';
    $currentTime = time();
    $timeElapsed = $currentTime - strtotime($dateTime);

    // Calculate absolute time elapsed
    $timeElapsed = abs($timeElapsed);

    // Calculate time elapsed in seconds, minutes, hours, days, and years
    $minutes = floor($timeElapsed / 60);
    $hours = floor($timeElapsed / 3600);
    $days = floor($timeElapsed / 86400);
    $years = floor($timeElapsed / 31536000);

    // Format the time ago string based on the elapsed time
    if ($timeElapsed < 60) {
        $timeAgo = '1 sec ago';
    } elseif ($minutes < 60) {
        $timeAgo = $minutes . ' min ago';
    } elseif ($hours < 24) {
        $timeAgo = $hours . ' hr ago';
    } elseif ($days < 365) {
        $timeAgo = $days . ' day ago';
    } else {
        $timeAgo = $years . ' year ago';
    }

    return $timeAgo;
}
?>
