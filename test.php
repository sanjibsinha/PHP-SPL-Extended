<?php

$files = new FilesystemIterator('all-files/images');
foreach ($files as $value) {
    # code...
    echo $value->getFilename();
}