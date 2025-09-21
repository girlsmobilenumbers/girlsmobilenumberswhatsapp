<?php
// increment_download.php
$counter_file = 'downloads.txt';
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 100000, LOCK_EX);
}

$count = (int)file_get_contents($counter_file);
$count++;

$fp = fopen($counter_file, 'w');
if (flock($fp, LOCK_EX)) { // Acquire an exclusive lock
    fwrite($fp, $count);
    flock($fp, LOCK_UN); // Release the lock
}
fclose($fp);

// Ensure redirect to the download URL
if (isset($_GET['redirect']) && !empty($_GET['redirect'])) {
    $redirect_url = urldecode($_GET['redirect']);
    // Validate the redirect URL to prevent open redirect vulnerabilities
    if (filter_var($redirect_url, FILTER_VALIDATE_URL) && strpos($redirect_url, '4sync.com') !== false) {
        header('Location: ' . $redirect_url);
        exit;
    }
}

// Fallback if redirect URL is invalid or not provided
header('Location: https://girlsnumbersforchat.likesyou.org/girlsnumbers.php');
exit;
?>