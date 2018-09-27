<?
/*
 * Parse a CSV file. 
 */
$row = 1;
if( count($argv) > 0 ){
 $file = $argv[0]; 
}else{
 /* Use the test file */
 $file = 'scripts/test.csv';
 }
if (($handle = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "$num fields in line $row:\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "\n";
        }
    }
    fclose($handle);
}else{
 die("IO error while opening CSV file: $file");
}
?>