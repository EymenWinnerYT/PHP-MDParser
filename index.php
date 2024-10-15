<!doctype html>
<html>
<body>

<?php
require_once "parser.php";
$psr = new MDParser();
$psr->parse("# Markdown test<br>");
?>

<?php $psr->parse("## Header 2"); ?>
<?php $psr->parse("### Header 3"); ?>
<?php $psr->parse("#### Header 4"); ?>
<?php $psr->parse("##### Header 5"); ?>
<?php $psr->parse("###### Header 6"); ?>

<br><br><br><br>

This is <?php $psr->parse("**Bold**"); ?> text.<br><br>
This is <?php $psr->parse("*Italic*"); ?> text.<br><br>
This is <?php $psr->parse("<http://gr8brik.rf.gd>"); ?> a link.<br><br>
This is <?php $psr->parse("``\"Hello World!\"``")?> a code tag.<br><br>
This is <br><br><?php $psr->parse("!(http://eymenwinneryt.42web.io/assets/gif/banner1.gif)")?><br><br>an image.<br><br>
</body>
</html>