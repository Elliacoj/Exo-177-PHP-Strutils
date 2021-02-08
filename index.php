<?php

require './classes/StrUtils.php';

$myStr = new StrUtils('Bonjour à tous');

$myStr->setBold(true);
$myStr->setItalic(true);
$myStr->setCapitalize(true);
$myStr->setUnderline(true);
$myStr->uglify();

echo $myStr;
