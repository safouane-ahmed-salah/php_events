# PHP Events
simulation of javascript event in php

# usage: 

_on('test', function($a = '', $b =''){ return $a; });

_on('test', function($a=''){ return "b"; });

$a = _trigger('test', '1', '2');

print_r($a); // results: b
