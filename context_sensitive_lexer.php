<?php 
// context sensitive lexer
// see: https://wiki.php.net/rfc/context_sensitive_lexer

class Collection {
    public function forEach(callable $callback, array $a) 
    { 
        foreach ($a as $item) {
            yield $callback($item);
        }
    }
    public function list($a) 
    {
        return iterator_to_array($a);
    }
}

$c = new Collection();

$test = ['A','B','C'];
$cb   = function ($i) { return strtolower($i); };

var_dump($c->list($c->forEach($cb, $test)));
echo PHP_EOL;



