function solution($message, $K) {
    $ps = substr($message,0,$K);
    $pa = explode(" ", $ps);
    $ma = explode(" ", $message);
    $li = count($pa)-1;
    if(strlen($ma[$li]) > strlen($pa[$li])){
        array_pop($pa);
    }
    return rtrim(implode(" ", $pa));
}

print solution($message,$k)




