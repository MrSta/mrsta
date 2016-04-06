<?php 
/**
 * This is a Mrsta pagecontroller.
 *
 */
// Include the essential config-file which also creates the $mrsta variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Mrsta container.
$mrsta['title'] = "Redovisning";

$mrsta['main'] = <<<EOD
<article class="readable">
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<h3>Vilken utvecklingsmiljö använder du?</h3>
<p>Jag kör med MS WebMatrix som editor och med IIS som web server. WebMatrix är en miljö jag trivs bra med
när jag utvecklar i PHP. Nackdelen med att köra IIS som web server är två, htaccess fungerar inte och 
radbrytningar görs med CrLf så jag konverterar dessa innan jag publicerar. Fördelen är att det är så
enkelt att komma igång samt att det finns IntelliSense.</p>
<h3>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</h3>
<p>Guiden gick vi igenom på förra kursen så det var bara att skumma igenom.</p>
<h3>Vad döpte du din webbmall Anax till?</h3>
<p>Mrsta blev namnet på webmallen. Det är samma namn som på mitt företag och dess ursprung är från
80-talet när jag spelade arkadspel på spelhallen Bjuvia Fritid i Malmö. I de flesta spel kunde man
endast fylla i tre initialer men till Marble Madness kunde man fylla i fem. Det blev Mrsta som står för
Mister Staffan. Ja, jo, jag vet, lite nördigt och lite egotrippat ;-)</p>
<h3>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</h3>
<p>Min ansats var att göra så få ändringar som möjligt i Anax eftersom det antagligen underlättar
framöver. Det höll jag mig till, dvs jag hoppade inte över något. Anax i sig är ytterligare ett sätt
att implementera ett ramverk på och det duger lika gott som något annat.</p>
<h3>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</h3>
<p>Jag gjorde source som en modul och det var inga problem. Plug 'n play :-)</p>
<h3>Gjorde du extrauppgiften med GitHub?</h3>
<p>Ja, Git används frekvent i arbetslivet så det var ett måste, tycker jag.</p>
<h3>Övrigt</h3>
<p>Jag inkluderade font awesome som jag använder för att presentera linked in symbolen.</p>


<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


{$mrsta['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Mrsta.
include(MRSTA_THEME_PATH);
