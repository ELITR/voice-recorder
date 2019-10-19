<?php

/**
 * Returns num-th sentence of given dataset
 */

$ds = $_GET['ds'];
$num = $_GET['num'] - 1;

if ($num < 0) {
    echo "sentence number must be a positive integer!";
    return;
}

$file = 'datasets/' . $ds;

if ($num > intval(exec("wc -l '$file'"))) {
    echo "sentence does not exists!";
    return;
}


if (!file_exists($file))
    echo 'ERROR: invalid dataset!';
else {
    $spl = new SplFileObject($file);
    $spl->seek($num);
    echo $spl->current();
}
?>