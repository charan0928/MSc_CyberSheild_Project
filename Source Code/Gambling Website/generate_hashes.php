<?php
// Function to generate password hash
function generate_hash($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Passwords to hash
$passwords = ['password1', 'password2', 'password3', 'password4', 'password5'];

// Generate and display hashes
foreach ($passwords as $password) {
    echo 'Password: ' . $password . ' | Hash: ' . generate_hash($password) . "\n";
}
?>
