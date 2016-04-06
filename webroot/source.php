 <?php 
/**
 * This is a Mrsta pagecontroller.
 *
 */
// Include the essential config-file which also creates the $mrsta variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$mrsta['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Mrsta container.
$mrsta['title'] = "Visa källkod";

$mrsta['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Mrsta.
include(MRSTA_THEME_PATH);
