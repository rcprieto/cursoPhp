<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);
//var_dump($content);

$parse = parse_url($link);
//var_dump($parse);

//var_dump($parse["path"]);
$baseName = substr($parse["path"], 1);


if(!is_dir(dirname($baseName)))
{
    
    mkdir(dirname($baseName), 0777, true);
}

// $dir = "images/branding/googlelogo/1x"; //dirname($baseName);
// echo $dir;
//mkdir($baseName, 0777, true);


$file = fopen($baseName, "w+");
fwrite($file, $content);
fclose($file);


?>

<img src="<?=$baseName?>" />