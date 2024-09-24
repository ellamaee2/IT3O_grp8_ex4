<?php
$file = "feedbacks.txt";

if (file_exists($file)) {
    $file_lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!empty($file_lines)) {
        echo "<h2>Previous Feedbacks</h2>";
        echo "<ul>";

        foreach ($file_lines as $line) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No feedback yet. Be the first to leave one!</p>";
    }
} else {
    echo "<p>The feedback file does not exist.</p>";
}
?>
