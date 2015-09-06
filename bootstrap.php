<?php
/**
 * Created by IntelliJ IDEA.
 * User: tristanl
 * Date: 9/6/15
 * Time: 7:22 AM
 */

require_once "vendor/autoload.php";

spl_autoload_register(function ($class) {
    print("finding class " . $class . PHP_EOL);
    // project-specific namespace prefix
    $prefix = 'Tristan';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    print("Looking for class " . $class . " at " . $file . PHP_EOL);
    // if the file exists, require it
    if (file_exists($file)) {
        print("FOUND! " . PHP_EOL);
        require $file;
    }
});