<?php
// Fatal errors to Error exceptions conversions
// the list of functions affected by this is extensive
// and covers a number of extensions
// see: http://php.net/manual/en/migration71.incompatible.php

// examples
$xml = <<<EOT
<?xml version='1.0' standalone='yes'?>
<root>
    <test>
        <person id='1'>Fred</person>
        <person id='3'>Barney</person>
        <person id='5'>Wilma</person>
        <person id='7' id='8'>Betty</person>
    </test>
</root>
EOT;

// PHP 5: fatal error
// PHP 7.1: Exception thrown
try {
    $simple = new SimpleXMLElement($xml);
    echo $simple->asXml();
    echo PHP_EOL;
} catch (Throwable $e) {
    echo get_class($e) . ':' . $e->getMessage();
}


