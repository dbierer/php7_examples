<?php
// throwable interface:
// from Chris to All Participants:
// declaring a class name again cant be caught it seems

try {
    class Test
    {
        public $test = 'TEST';
    }
    class Test
    {
        public $test = 'TEST';
    }
} catch (Error $e) {
    // Log error and end gracefully
    echo 'Error: did not supply the correct type!';
} catch (Exception $e) {
    // Handle any exceptions
    echo 'Exception: ' . $e->getMessage();
} catch (Throwable $e) {
    // Handle any exceptions OR errors
    echo 'Anything Else: ' . $e->getMessage();
}
echo PHP_EOL;
