<?
//Pintf 4 arrays
$format = "A %s %s %s.\n";

$array1 = Array("monkey", "cow", "rooster");
$array2 = Array("eats", "goes", "crows");
$array3 = Array("bananas", "moo", "in the morning");


function printf_arrays($format) {
    $args = func_get_args();
    array_shift($args); // get rid of format
    for($i=0; $i<count($args[0]); $i++) {
        $pfargs = Array();
        foreach($args as $arr) $pfargs[] = (is_array($arr) && $arr[$i]) ? $arr[$i] : '';
        vprintf($format, $pfargs);
    }
}
printf_arrays($format, $array1, $array2, $array3);
/* should output
A monkey eats bananas.
A cow goes moo.
A rooster crows in the morning.
*/
?>