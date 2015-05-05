<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

echo "nERROR:" . "<pre>" . print_r($error, TRUE) . "</pre>"; 
echo "\nMESSAGE: " . "<pre>" . print_r($error, TRUE) . "</pre>";
echo "\nERROR DETAILS" . "<pre>" . print_r(get_defined_vars(), TRUE) . "</pre>";

