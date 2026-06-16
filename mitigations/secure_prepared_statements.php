<?php
// Defensive Architecture Implementation: Parameterized Queries
// Disables SQL Injection vectors by preprocessing string templates distinct from input data.

function secureFetchUserData($conn, $id) {
    // 1. Compile query structure template securely on the server
    $stmt = $conn->prepare('SELECT first_name, last_name FROM users WHERE user_id = ?');
    
    if (!$stmt) {
        return false;
    }
    
    // 2. Bind application query variables safely as data types explicitly
    $stmt->bind_param('i', $id); // 'i' flag restricts evaluation strictly to integer values
    
    // 3. Dispatch structured parameters and compile safely
    $stmt->execute();
    
    // 4. Capture query collection arrays cleanly
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
?>
