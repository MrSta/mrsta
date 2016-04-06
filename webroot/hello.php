<?php 
/**
 * This is a Mrsta pagecontroller.
 *
 */
// Include the essential config-file which also creates the $mrsta variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Mrsta container.
$mrsta['title'] = "Hello World";

$mrsta['header'] = <<<EOD
<img class='sitelogo' src='img/me/me-small.jpg' alt='Mrsta Logo'/>
<span class='sitetitle'>Mrsta webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$mrsta['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Mrsta ser ut och fungerar.</p>
EOD;

$mrsta['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Staffan Sjöberg (staffan@mrsta.se) | <a href='https://github.com/mrsta/mrsta'>Mrsta på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * The navbar
 *
 */
//$mrsta['navbar'] = null; // To skip the navbar
$mrsta['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);




// Finally, leave it all to the rendering phase of Mrsta.
include(MRSTA_THEME_PATH);
