<?php

$raw_data = file_get_contents("https://xkcd.com/info.0.json");

$comic = json_decode($raw_data, true);

echo $comic['img'] . PHP_EOL;