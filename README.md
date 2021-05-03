# PHP Events
simulation of javascript event in php

# usage: 

```php
use ActionManager\Action;

Action::on('test', function($a = '', $b =''){ return $a; });

Action::on('test', function($a=''){ return "b"; });

$a = Action::trigger('test', '1', '2');

print_r($a); // results: b
```
