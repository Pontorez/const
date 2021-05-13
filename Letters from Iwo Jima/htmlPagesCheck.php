<?php

$di = new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS);
$it = new RecursiveIteratorIterator($di);

$dates = [];
$badFilenames = ['hit', 'watch.js.download', 'watch.js', 'top100.jcn', 'f.txt', 'e82f7f048c76.js', 'e82f7f048c76.js.download'];

foreach ($it as $file) {

    foreach ($badFilenames as $badFilename) {
        if (substr($file, -strlen($badFilename), strlen($badFilename)) == $badFilename) {
            echo "Bad filename: $badFilename\n"; exit;
        }
    }

    if (substr($file, -10, 10) != 'index.html' &&
        substr($file, -3, 3) != '.js' &&
        substr($file, -12, 12) != '.js.download') continue;

    $html = file_get_contents($file);

    foreach (['mail.ru/js/code', 'an.yandex.ru', 'ad.mail.ru', 'context.js', 'mail.ru/counter',
                 'liveinternet.ru/click', 'counter.rambler.ru', 'mc.yandex.', 'google-analytics.com'] as $textToSearch) {
        if (strpos($html, $textToSearch)) {
            echo "$textToSearch in $file\n"; exit;
        }
    }
}
