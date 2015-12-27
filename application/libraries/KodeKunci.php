<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class KodeKunci {

    public function BuatKodeKunci($len)
    {
	    $result = "";
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOKQRSTUVWXYZ0123456789";
	    $charArray = str_split($chars);
	    for($i = 0; $i < $len; $i++){
		    $randItem = array_rand($charArray);
		    $result .= "".$charArray[$randItem];
	    }
	    return $result;
    }
}

/* End of file Someclass.php */