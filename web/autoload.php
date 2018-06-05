<?php
function myAutoLoad($class_name)
{
    $class_pieces = explode('\\', $class_name);

    switch ($class_pieces[0]) {
        case 'app':
            $file = __DIR__ . '/../' . implode(DIRECTORY_SEPARATOR, $class_pieces) . '.php';
            if (file_exists($file)) {
                require_once $file;
            } else {
                $class_instance = new app\controllers\Page404();
            }
            break;
    }
}

spl_autoload_register('myAutoLoad', true, true);
