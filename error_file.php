<?php

/**
 * 
 * trigger_error() : creates uer-level error message : built-in error handling
 * 
 */
echo "<h2>trigger_error() : creates uer-level error message : built-in error handling</h2>";
$trigger_err_var = 2025;
if ($trigger_err_var>2024) {
    
    trigger_error("Year is greater!"); //trigger_error() : creates uer-level error message : built-in error handling
}
?>