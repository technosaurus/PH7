<?
/* Static variables */
function cycle($a, $b, $i=0) {
    static $switches = array();
    if (isset($switches[$i])) $switches[$i] = !$switches[$i]; else !($switches[$i] = true);
    return ($switches[$i])?$a:$b;
}

for ($i = 1; $i<3; $i++) {
    echo $i.cycle('a', 'b').PHP_EOL;
    for ($j = 1; $j<5; $j++) {
        echo ' '.$j.cycle('a', 'b', 1).PHP_EOL;
        for ($k = 1; $k<3; $k++) {
            echo '  '.$k.cycle('c', 'd', 2).PHP_EOL;
        }
    }
}
/**
Output:
1a
 1a
  1c
  2d
 2b
  1c
  2d
 3a
  1c
  2d
 4b
  1c
  2d
2b
 1a
  1c
  2d
 2b
  1c
  2d
 3a
  1c
  2d
 4b
  1c
  2d
*/
?>