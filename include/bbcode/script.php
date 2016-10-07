<?php
// Function to convert BBcode in HTML tags ( http://coursesweb.net )
function formatBBcode($str) {
  // characters that represents bbcode, and smiles
  $bbcode = array(
  '/\[b\](.*?)\[\/b\]/is', '/\[i\](.*?)\[\/i\]/is', '/\[u\](.*?)\[\/u\]/is',      // for format text
  '/\[url\=(.*?)\](.*?)\[\/url\]/is',                           // for URL
  '/\[color\=#([0-9a-f]{3,6})\](.*?)\[\/color\]/is',            // for color
  // smiles
  '/:\)/i', '/:\(/i', '/:P/i', '/:D/i', '/:S/i', '/:O/i', '/:=\)/i', '/:\|H/i', '/:X/i', '/:\-\*/i');

  // HTML code that replace bbcode, and smiles characters
  $htmlcode = array(
  '<b>$1</b>', '<i>$1</i>', '<u>$1</u>',                   // format text
  '<a target="_blank" href="$1" title="$2">$2</a>',        // URL
  '<span style="color:#$1;">$2</span>',                    // color
  // smiles (from "icos/" directory)
  '<img src="icos/0.gif" alt=":)" style="border:none;" />',
  '<img src="icos/1.gif" alt=":(" style="border:none;" />',
  '<img src="icos/2.gif" alt=":P" style="border:none;" />',
  '<img src="icos/3.gif" alt=":D" style="border:none;" />',
  '<img src="icos/4.gif" alt=":S" style="border:none;" />',
  '<img src="icos/5.gif" alt=":O" style="border:none;" />',
  '<img src="icos/6.gif" alt=":=)" style="border:none;" />',
  '<img src="icos/7.gif" alt=":|H" style="border:none;" />',
  '<img src="icos/8.gif" alt=":X" style="border:none;" />',
  '<img src="icos/9.gif" alt=":-*" style="border:none;" />'
  );

  $str = preg_replace($bbcode, $htmlcode, $str);   // perform replaceament

  return nl2br($str);      // nl2br() to replace new line characters with <br>
}

// if data from POST "txtmsg", gets the text
// delete tags, replace BBcode with HTML, and output the text
$str = isset($_POST['txtmsg']) ? formatBBcode( strip_tags($_POST['txtmsg'], '<b><i><u><span><img><a>') ) : 'index.php';
echo $str;