<?php
//$ttfFile = 'NotoSansCJKjp-Regular.ttf';
//$outputFile = 'NotoSansBase64.txt';
// $ttfFile = 'ipaexg.ttf';
// $outputFile = 'IPAexgBase64.txt';
$ttfFile = 'ipaexm.ttf';
$outputFile = 'IPAexmBase64.txt';


try {
    if (!file_exists($ttfFile)) throw new Exception("Error: $ttfFile not found.");
    $ttfContent = file_get_contents($ttfFile);
    if ($ttfContent === false) throw new Exception("Error: Failed to read $ttfFile.");
    $base64 = base64_encode($ttfContent);
    if (file_put_contents($outputFile, $base64) === false) throw new Exception("Error: Failed to write to $outputFile.");
    echo "Success: Base64 file created at $outputFile.\n";
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
?>