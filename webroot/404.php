<?php 
/**
 * This is a Mrsta pagecontroller.
 *
 */
// Include the essential config-file which also creates the $mrsta variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Mrsta container.
$mrsta['title'] = "404";
$mrsta['header'] = "";
$mrsta['main'] = "This is a Mrsta 404. Document is not here.";
$mrsta['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Mrsta.
include(MRSTA_THEME_PATH);
