$body = print_r($_POST, true);
$count = 0;
$array1 = array();
foreach ($_POST as $key => $value) {
global $count,$array1;
if(!empty($value))
{
$array1["$key"]="$value";
// array_push($array1["$key"], );
$count++;
}
}