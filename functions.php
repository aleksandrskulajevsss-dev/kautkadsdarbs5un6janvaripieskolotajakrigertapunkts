<?php
function dd($value) {

echo "";
var_dump($value);
echo "";
die();
}

 function redirectIfNotFound($location = "/") {
     http_response_code(404);
     header("Location: $location",302);
     exit();
 }  