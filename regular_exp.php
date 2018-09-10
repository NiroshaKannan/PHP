<?php

$url = "www.gihub.com";
if(preg_match('/git/',$url))
{
	echo "The url $url contain git";
}else{
	echo "The url $url dose not contain git";
	}
?>