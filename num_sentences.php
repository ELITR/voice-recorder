<?php

/**
 * Returns number of sentences of given dataset
 */

$ds = $_GET['ds'];

$file = 'datasets/' . $ds;

if (!file_exists($file))
    echo 'ERROR: dataset does not exists!';
else
    echo intval(exec("wc -l '$file'")) + 1;

?>    