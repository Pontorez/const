<?php

$it = new RecursiveDirectoryIterator('Letters_from_Iwo_Jima');
foreach (new RecursiveIteratorIterator($it) as $file) {
    if (substr($file, -11, 11) == 'message.txt') {
        $newFileName = str_replace('message.txt', 'readme.txt', $file);
        exec('git mv "' . $file . '" "' . $newFileName . '"');
    }
}
