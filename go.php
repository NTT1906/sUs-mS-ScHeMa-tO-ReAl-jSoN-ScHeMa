<?php
declare(strict_types=1);
$schema = "http://json-schema.org/draft-07/schema#";
$file = glob(__DIR__ . "/schema/*");
$regex = "~```json\s([\s\S]+)\s```~";

$format = [
	"version" => "string",
];
$version_regex = "\d+.\d+.\d";
$title_regex = "geometry:$version_regex";


function jsonize(string $input) : void{
	$title = "geometry:*";
}

foreach ($file as $f) {
	$content = file_get_contents($f);
	preg_match($regex, $content, $matches, PREG_OFFSET_CAPTURE);
}
