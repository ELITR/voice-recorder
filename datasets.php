<?php

/**
 * Returns list of datasets
 */

$directory = './datasets';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

//exec("find data/* -exec chmod 777 {} +");

foreach ($scanned_directory as $value) {
    echo '<option>' . $value . '</option>';
}

?>