<?php
// Defensive Architecture Implementation: Explicit Input Whitelisting
// Prevents traversal and remote system link evaluation.

$file = $_GET['page'];

// 1. Establish absolute static whitelist registry boundary
$allowed_pages = [
    "include.php" => "include.php",
    "file1.php"   => "file1.php",
    "file2.php"   => "file2.php"
];

// 2. Explicit key verification evaluation checks
if (array_key_exists($file, $allowed_pages)) {
    include($allowed_pages[$file]);
} else {
    // 3. Fail-secure localized fallback routing catch
    include("include.php");
}
?>
