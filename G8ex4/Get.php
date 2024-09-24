<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['member'])) {
        echo 'GET member parameter: ' . htmlspecialchars($_GET['member']);
        $memberIndex = intval($_GET['member']);
        if ($memberIndex >= 0 && $memberIndex < count($teamMembers)) {
            $selectedMember = $teamMembers[$memberIndex];
            print_r($selectedMember); 
        } else {
            echo 'Invalid member index.';
        }
    } else {
        echo 'Member parameter is not set.';
    }
}
?>
