<?php
// filtered unserialize

include __DIR__ . '/foo_bar_baz.php';

// all OK
var_dump(unserialize($serialized['foo']));

// __PHP__Incomplete_Class
var_dump(unserialize($serialized['foo'], ['allowed_classes' => FALSE]));

// works OK
var_dump(unserialize($serialized['foo'], ['allowed_classes' => ['Foo','Bar']]));

// error
var_dump(unserialize($serialized['baz'], ['allowed_classes' => ['Foo','Bar']]));

