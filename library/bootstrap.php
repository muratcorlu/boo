<?php

// Define application environment if it wasn't defined already
if (!defined('APPLICATION_ENV')) {
    // We are reading application environment from system environment
    // Default is production. Set system environment APPLICATION_ENV as development
    // on development machines
    //
    // @TODO: Give ability to change key of system environment to handle application
    // environment.
    // @TODO: Give ability to store application environment data on a configuration file.
    define('APPLICATION_ENV', getenv('APPLICATION_ENV') || 'production');
}

if (!defined('LIB_PATH')) {
    define('LIB_PATH', dirname(__FILE__));
}


