<?php

class cli
{
    static public function input($v)
    {
    	echo $v;
    	$handle = fopen("php://stdin","r");
    	$line = fgets($handle);
    	return $line;
    }



}
