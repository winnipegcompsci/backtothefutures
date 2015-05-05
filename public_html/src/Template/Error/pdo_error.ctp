<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

echo "\$ERROR:" . "<pre>" . print_r($error) . "</pre>"; 
echo "\nMESSAGE: " . "<pre>" . print_r($error, TRUE) . "</pre>";
echo "ERROR DETAILS" . "<pre>" . print_r(get_defined_vars(), TRUE) . "</pre>";

