<?
//PH7 must be compiled with math functions: -D PH7_ENABLE_MATH_FUNC
//Refer to http://ph7.symisc.net/c_api_const.html#compile_time for additional information.
/*
 * Converts an integer into the alphabet base (A-Z).
 *
 * @param int $n This is the number to convert.
 * @return string The converted number.
 * @author Theriault
 *
 */
function num2alpha($n) {
    $r = '';
    for ($i = 1; $n >= 0 && $i < 10; $i++) {
        $r = chr(0x41 + ($n % pow(26, $i) / pow(26, $i - 1))) . $r;
        $n -= pow(26, $i);
    }
    return $r;
}
/**
 * Converts an alphabetic string into an integer.
 *
 * @param int $n This is the number to convert.
 * @return string The converted number.
 * @author Theriault
 *
 */
function alpha2num($a) {
    $r = 0;
    $l = strlen($a);
    for ($i = 0; $i < $l; $i++) {
        $r += pow(26, $i) * (ord($a[$l - $i - 1]) - 0x40);
    }
    return $r - 1;
}
var_dump(
alpha2num("Salut"),
num2alpha(1723),
num2alpha(9854),
alpha2num("Base64")
);
/*
 * Should output

int(9293725) 
string(3 "BNH")
string(3 "NOA")
int(39764075) 

*/

?>