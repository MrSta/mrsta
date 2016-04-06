<?php 
/**
 * This is a Mrsta pagecontroller.
 *
 */
// Include the essential config-file which also creates the $mrsta variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
//$mrsta['stylesheets'][]        = 'css/slideshow.css';
$mrsta['jquery']               = true;
//$mrsta['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Mrsta container.
$mrsta['title'] = "Om mig";

$mrsta['main'] = <<<EOD
<img src='img/me/me-6.jpg' height='180px' alt='Me'/>

<article class="readable">
<h1>Om Mig</h1>

<p>
    Mitt namn är Staffan Sjöberg och har växt upp i Malmö och i en liten förort utanför Malmö som heter Klågerup.
    Vi bodde i en lägenhet i Malmö och alla barn lekte på en innergård. Det blev mestadels fotboll och landhockey.
    I Klågerup bodde vi i ett hus och där blev huvudsysslan bordtennis.
</p>
<p>
    Mina universitetsstudier i Lund resulterade i en magisterexamen i datavetenskap.
</p>
<p>
    Jag har jobbat många år som konsult men de senaste 12 åren har jag jobbat på Sony Mobile i Lund.
</p>
<p>
    Förutom att spendera tid med familj (fru plus fyra barn) försöker jag hinna med studier och att
    driva mitt eget företag med spelinriktning.
</p>

{$mrsta['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Mrsta.
include(MRSTA_THEME_PATH);
