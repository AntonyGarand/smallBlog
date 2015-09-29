<?php
/**
 * debug.php
 * Debugging functions and variables
 * Programmed by Antony Garand
 * 28/09/15
 */
?>
<?php  

$debug = false;

if ($debug) /* Report errors if we are debugging */
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else { /* Do not report errors if we are not debugging */
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    ini_set('display_errors', '0');
}