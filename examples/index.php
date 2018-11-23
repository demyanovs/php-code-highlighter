<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeHighlighter example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet"  href="css/highlighter.css">
    <script type="text/javascript" src="js/code_highlighter.js"></script>
</head>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../CodeHighlighter/src/autoload.php';

use CodeHighlighter\Highlighter;
use CodeHighlighter\HighlighterPHP;
use CodeHighlighter\HighlighterBash;

$text = '
<h2>PHP</h2>
<code data-lang="php" data-file-path="php-code-highlighter/examples/index.php">
private static function strPos()
{
    $mystring = "abc";
    $findme   = "a";
    $pos = strpos($mystring, $findme);
    
    // Note our use of ===.  Simply == would not work as expected
    // because the position of "a" was the 0th (first) character.
    if ($pos === false) {
        echo "<p>The string <b>"$findme"</b> was not found in the string $mystring</p>";
    } else {
        echo "The string "$findme" was found in the string $mystring";
        echo " and exists at position $pos";
    }
}
</code>

<h2>JavaScript</h2>
<code data-lang="js" data-file-path="example.js">
function myConcat(separator) {
   var result = \'\'; // initialize list
   var i;
   // iterate through arguments
   for (i = 1; i < arguments.length; i++) {
      result += arguments[i] + separator;
   }
   return result;
}
</code>

<h2>Bash</h2>
<code data-lang="bash" data-file-path="example.sh">
#!/bin/bash
directory="./BashScripting"

# bash check if directory exists
if [ -d $directory ]; then
	echo "Directory exists"
else 
	echo "Directory does not exists"
fi
</code>


<h2>Xml</h2>
<code data-lang="xml">
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE recipe>
<recipe name="хлеб" preptime="5min" cooktime="180min">
   <title>
      Простой хлеб
   </title>
   <composition>
      <ingredient amount="3" unit="стакан">Мука</ingredient>
      <ingredient amount="0.25" unit="грамм">Дрожжи</ingredient>
      <ingredient amount="1.5" unit="стакан">Тёплая вода</ingredient>
   </composition>
   <instructions>
     <step>
        Смешать все ингредиенты и тщательно замесить. 
     </step>
     <step>
        Закрыть тканью и оставить на один час в тёплом помещении. 
     </step>
     <step>
        Замесить ещё раз, положить на противень и поставить в духовку.
     </step>
   </instructions>
</recipe>
</code>

';

$highlighter = new Highlighter($text);
HighlighterPHP::setKeywordColor('#a800a2; font-weight: bold');

echo $highlighter->parse();

?>
</body>
</html>
