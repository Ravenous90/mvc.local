<?php
function myAutoLoad($class_name)
{

    $class_pieces = explode('\\', $class_name);

    switch ($class_pieces[0]) {
        case 'app':
            require_once __DIR__ . '/../' . implode(DIRECTORY_SEPARATOR, $class_pieces) . '.php';
            break;
     }
}
spl_autoload_register('myAutoLoad', true, true);
