<?php

function appCorpTask($num, $numArr)
{
    $count = 2;
    $output = 0;
    while($count--) {
        $result = [];
        for ($i = 0; $i < $num; $i++) {
            if (isset($result[$numArr[$count][$i]])) {
                unset($result[$numArr[$count][$i]]);
            } else {
                $result[$numArr[$count][$i]] = 0;
            }
        }
        $output += count($result);
    }
    return $output ;
}

?>
