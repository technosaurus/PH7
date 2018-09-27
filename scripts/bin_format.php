<?
/**
     * Output an x bit string representing a binary value.
     * Default is 8 bits ie. 0000 0000
     * eg. fmt_binary($x,32) : output a 32-bit binary representation of $x
     * @param string $x x-bit formatted binary
     */
    function fmt_binary($x, $numbits = 8) {
        // Convert to binary
        $bin = decbin($x);
        $bin = substr(str_repeat(0,$numbits),0,$numbits - strlen($bin)) . $bin;
        // Split into x 4-bits long
        $rtnval = '';
        for ($x = 0; $x < $numbits/4; $x++) {
            $rtnval .= ' ' . substr($bin,$x*4,4);
        }
    // Get rid of first space.
    return ltrim($rtnval);
} 
var_dump(fmt_binary(2541));
/* Should output
string(9 "0000 1001")
*/
?>