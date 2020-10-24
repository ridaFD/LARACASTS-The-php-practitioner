<?php

$person = [
  'age' => 23,
  'gender' => 'male',
    'career' => 'web developer'
];
// append KEY and VALUE to the associative array:
$person['hobie'] = 'football';

// remove KEY and it's value:
unset($person['career']);

require 'index.view.php';