<?php

$di = new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS);
$it = new RecursiveIteratorIterator($di);

$dates = [];

foreach ($it as $file) {
    if (substr($file, -10, 10) != 'readme.txt') continue;
    $message = file_get_contents($file);

    if (!preg_match('/Date: (.+)/', $message, $matches)) {
        echo "No datetime in $file\n";
        exit;
    }

    $datetime = trim($matches[1]);

    if (stripos($message, '=?UTF-8?')) {
        echo "Fixing $file\n";

        $messageFixed = str_replace('=?utf-8?b?0KDQvtGB0LrQvtC80L3QsNC00LfQvtGA?=', 'Роскомнадзор', $message);

        $messageFixed = preg_replace_callback('#From: (=\?UTF-8\?.+\n.+)#', function ($matches) {
            return 'From: ' . mb_decode_mimeheader($matches[1]);
        }, $messageFixed);

        $messageFixed = preg_replace_callback('#Subject: (=\?UTF-8\?.+\n.+\n.+)#', function ($matches) {
            return 'Subject: ' . mb_decode_mimeheader($matches[1]);
        }, $messageFixed);
        $messageFixed = str_replace('is informing Content-Type:', "is informing\nContent-Type:", $messageFixed);

        file_put_contents($file, $messageFixed);
        $message = $messageFixed;
    }

    if (!preg_match('/Subject: (.+)/', $message, $matches)) {
        echo "No subject in $file\n"; exit;
    }
    $subject = trim($matches[1]);
    $dateAndSubject = "$datetime$subject";

    if (in_array($dateAndSubject, $dates)) {
        echo "Duplicate datetime: $dateAndSubject\n";
    }

    $dates[] = $dateAndSubject;
}

// search for duplicate rtfs:
$rtfFilenames = [];
$di = new RecursiveDirectoryIterator(__DIR__, RecursiveDirectoryIterator::SKIP_DOTS);
$it = new RecursiveIteratorIterator($di);
foreach ($it as $file) {
    if (substr($file, -19, 19) != 'notification_on.rtf') continue;
    $filename = basename($file);
    if (in_array($filename, $rtfFilenames)) {
        echo "Duplicate RTF: $filename\n";
    }
    $rtfFilenames[] = $filename;
}
