<?php
// Start the session
session_start();

// Destroy all session data
session_unset(); // Unsets all session variables
session_destroy(); // Destroys the session

// Redirect to a different page
header("Location: index.php");
exit();
?>