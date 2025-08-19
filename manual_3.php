<?php

function fibbo($n){
    if ($n==0) {
        return 0;
    }
    if ($n==1) {
        return 1;
    }
    return fibbo($n-1)+fibbo($n-2);
}

$n = 12;

for ($i=0; $i <$n; $i++) { 
    echo fibbo($i)." ";
}

?>