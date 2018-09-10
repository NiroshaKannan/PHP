<?php

$s1 = "Shalon is a FRONT END DEVELOPER";

echo strtolower($s1) ."<br>";
echo strtoupper($s1) ."<br>";
echo "Number of letter",strlen($s1)."<br>";
echo "Firest 10 letter in given $s1 :::",substr($s1, 0 ,10)."<br>";
echo str_replace("FRONT", "BACK", $s1)."<br>";
echo "The 'FRONT' word position in given word $s1 ::::",strpos($s1,"FRONT")."<br>";
echo "The hash value 'nirosha'::::::",sha1('nirosha')."<br>";
echo "The hash value 'nirosha'::::::",md5('nirosha')."<br>";
echo "The number of word count in $s1 is::::::",str_word_count($s1)."<br>";
echo "The ucFirst 'nirosha'::::::",ucfirst('nirosha')."<br>";
echo "The lcFirst 'NiroSha'::::::",lcfirst('NiroSha')."<br>";

?>