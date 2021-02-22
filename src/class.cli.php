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

    static public function input_number($v)
    {
        $input = trim(self::input($v));

        if (is_numeric($input))
            return $input;
        else {
            return self::input_number($v);
        }
    }

}
