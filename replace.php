<?php

$text = "We at github strive to make quality education affordable to the masses. github.com";

$text = preg_replace("/github/", '<span style="background:pink">github</span>', $text);

echo $text;

?>