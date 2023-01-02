<?php
$number = filter_input(INPUT_GET, 'n', FILTER_VALIDATE_FLOAT);
if($number === null){
    reply(["error" => "No number"]);
}
if($number === false){
    reply(["error" => "No number type float or int"]);
}
reply(["result" => $number * 2]);

function reply(array $data){
    echo json_encode($data);
    exit;
}