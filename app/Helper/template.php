<?php
namespace App\Helper;
    
class Template{
    public static function highlight($input, $paramSearch){
        if(empty($paramSearch['value']))
            return $input;
        return preg_replace("/" . $paramSearch['value'] . "/", '<span class="highlight">$0</span>', $input);
    }

}

?>