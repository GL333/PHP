<?php
date_default_timezone_set ("Europe/Vilnius");
$good_array = normalize_files_array($_FILES);

foreach($good_array['userfile'] as $file):
    $uploaddir = "D:\\xampp2\\htdocs\\php\\5pamoka\\uploads\\";

    $uploadfile = $uploaddir . ($file['name']);


    if (move_uploaded_file($file['tmp_name'], $uploadfile)) {

    $log = 'files.txt';
    $data = $file['name']." - ".date("Y-m-d H:i:s")." \n";
    if(!file_exists($log)){
        file_put_contents($log, $data);
    } else {
        file_put_contents($log, $data, FILE_APPEND);
    }
        header("Location: index.php");
//        echo "File is valid, and was successfully uploaded. <br>";
    } else {
        echo "Possible file upload attack! <br>";
    }
endforeach;
function normalize_files_array($files = []) {
    $normalized_array = [];
    foreach($files as $index => $file) {
        if (!is_array($file['name'])) {
            $normalized_array[$index][] = $file;
            continue;
        }
        foreach($file['name'] as $idx => $name) {
            $normalized_array[$index][$idx] = [
                'name' => $name,
                'type' => $file['type'][$idx],
                'tmp_name' => $file['tmp_name'][$idx],
                'error' => $file['error'][$idx],
                'size' => $file['size'][$idx]
            ];
        }
    }
    return $normalized_array;
}