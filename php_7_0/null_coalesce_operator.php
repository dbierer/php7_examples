<?php
// kind of a compressed ternary operator (i.e. "?:") on steroids

// NOTE: PHP won't complain about undefined variable!
var_dump($name ?? 'guest');

// Fetches the request parameter user and results in 'nobody' if it doesn't exist
var_dump($_GET['user'] ?? 'nobody');
// equivalent to: $username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
 
// Calls a hypothetical model-getting function, and uses the provided default if it fails
$default_model = new stdClass();
$id = 1;
class Model 
{
	public static function __callStatic($method, $params)
	{
		return NULL;
	}
}
var_dump(Model::get($id) ?? $default_model);
// equivalent to: if (($model = Model::get($id)) === NULL) { $model = $default_model; }
 
// Parse JSON image metadata, and if the width is missing, assume 100
$imageData = json_decode(file_get_contents('php://input'));
var_dump($imageData['width'] ?? 100);
// equivalent to: $width = isset($imageData['width']) ? $imageData['width'] : 100;

// It can even be chained: 
$x = NULL;
$y = NULL;
$z = 3;
var_dump($x ?? $y ?? $z); // int(3)
 
$x = ["yarr" => "meaningful_value"];
var_dump($x["aharr"] ?? $x["waharr"] ?? $x["yarr"]); // string(16) "meaningful_value"

// This example demonstrates the precedence relative to the ternary operator and the boolean or operator, which is the same as C#: 
var_dump(2 ?? 3 ? 4 : 5);      // (2 ?? 3) ? 4 : 5        => int(4)
var_dump(0 || 2 ?? 3 ? 4 : 5); // ((0 || 2) ?? 3) ? 4 : 5 => int(4)

// This example demonstrates how it is a short-circuiting operator: 
function foo() {
    echo "executed!", PHP_EOL;
}
var_dump(true ?? foo()); // outputs bool(true), "executed!" does not appear as it short-circuited
