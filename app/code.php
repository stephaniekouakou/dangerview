
<?php
    function random($length){
    $code = "0123456789AZERTYUIOPMLKJHGFDSQWXCVBN";
    return substr(str_shuffle(str_repeat($code, $length)),0,$length);
}
