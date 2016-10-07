<?php
session_start();
include('include/functions.php');
include('include/header.php');

if(!isset($_SESSION['account']))
{
    header('Location: index.php');
}
if(!empty($_GET['notok']) && $_GET['notok'] == 1)
{
?>
<div class="notificationerror" style="display: block">Eroare!</div>
<?php
}
else if(!empty($_GET['notok']) && $_GET['notok'] == 2){
?>
<div class="notificationerror" style="display: block">Post adaugat!</div>
<?php
} else {
?>

<form method="post" action="add_post2.php" id="addpost_form">

<strong>Titlu</strong><br />

<input type="text" name="title" class="style" value=""/><br />

<strong>Text</strong><br />

<div id="icos">
  <img src="include/bbcode/icos/bold.png" alt="B" title="b" class="addtag" style="cursor:pointer;border:none;" onclick="addTag(this)" />
  <img src="include/bbcode/icos/italic.png" alt="I" title="i" class="addtag" style="cursor:pointer;border:none;" onclick="addTag(this)" />
  <img src="include/bbcode/icos/underline.png" alt="U" title="u" class="addtag" style="cursor:pointer;border:none;" onclick="addTag(this)" />
  <img src="include/bbcode/icos/url.png" alt="Link" title="Link" class="seturl" style="cursor:pointer;border:none;" onclick="setUrl()" />&nbsp;
  <img src="include/bbcode/icos/color.png" alt="Color" title="Color" style="cursor:pointer;border:none;" onclick="document.getElementById('getcolor').style.display='block'" />
  <img src="include/bbcode/icos/0.gif" alt=":)" title=":)" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/1.gif" alt=":(" title=":(" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/2.gif" alt=":P" title=":P" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/3.gif" alt=":D" title=":D" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/4.gif" alt=":S" title=":S" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/5.gif" alt=":O" title=":O" class="addsmile"  style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/6.gif" alt=":=)" title=":=)" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/7.gif" alt=":|H" title=":|H" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/8.gif" alt=":X" title=":X" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
  <img src="include/bbcode/icos/9.gif" alt=":-*" title=":-*" class="addsmile" style="cursor:pointer;border:none;" onclick="addSmile(this)" />
</div>

<div class="frontpage" id="getcolor" style="display:none;margin:3px auto;">Colors</div>

<textarea name="post_text" id="post_text" form="addpost_form" cols="80" rows="20" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Introduceti textul aici...</textarea><br />

<input type="reset" value="Reset" style="margin-left:0;" class="buton_mare"/>

<input type="submit" value="Trimite" class="buton_mare"/>

</form>
<script src="include/bbcode/addformat.js" type="text/javascript"></script>
<?php
}
include('include/sidebar.php');
include('include/footer.php');
?>