<?php
/**
 * Config-file for Mrsta. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Mrsta paths.
 *
 */
define('MRSTA_INSTALL_PATH', __DIR__ . '/..');
define('MRSTA_THEME_PATH', MRSTA_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(MRSTA_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Mrsta variable.
 *
 */
$mrsta = array();


/**
 * Site wide settings.
 *
 */
$mrsta['lang']         = 'sv';
$mrsta['title_append'] = ' | Mrsta en webbtemplate';

$mrsta['header'] = <<<EOD
<img class='sitelogo' src='img/me/me-small.jpg' height="100px" alt='Mrsta Logo'/>
<span class='sitetitle'>Mrsta oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$mrsta['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Staffan Sjöberg (staffan@mrsta.se) | <a href='https://github.com/mrsta/'>Mrsta på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$mrsta['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src="./img/me/me-small.jpg?w=80&h=80&crop-to-fit&q=70" height="100px" alt="Staffan">
    <figcaption>En seriös Staffan.</figcaption>
  </figure>
  <p>
    Staffan Sjöberg är en fyrabarnspappa som tycker att bland det roligaste som finns är att programmera. 
    Han har ett heltidsjobb på SONY i Lund vid sidan om sitt eget företag.
  </p>

  <nav>
    <ul class='icons'>
      <li><a href='http://mikaelroos.se/linkedin'><i class="fa fa-linkedin"></i></a></li>
    </ul>
  </nav>

</footer>
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





/**
 * Theme related settings.
 *
 */
//$mrsta['stylesheet'] = 'css/style.css';
$mrsta['stylesheets'] = array('css/style.css');
$mrsta['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$mrsta['modernizr'] = 'js/modernizr.js';
$mrsta['jquery'] = 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$mrsta['jquery'] = null; // To disable jQuery
$mrsta['javascript_include'] = array();
//$mrsta['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$mrsta['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
