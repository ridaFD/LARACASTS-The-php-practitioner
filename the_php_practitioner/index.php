<?php

$database = require 'bootstrap.php';

$tasks = $database->selectAll('REIDA');




require 'index.view.php';