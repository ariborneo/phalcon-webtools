<?php

return new \Phalcon\Config(array(
    'database' => array( // change with your database config
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => '',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../Tools/Controllers/',
        'viewsDir'       => __DIR__ . '/../Tools/Views/',
        'cacheDir'       => __DIR__ . '/../cache/',
        'baseUri'        => '/', // change according to your base URL
    ),
    'tools' => array(
        'copyright' => "", // copyright header for generated files; default empty
        'modulesPath' => dirname(__DIR__) . '/', // path to your modules/app directory
        'migrationsPath' => dirname(dirname(__DIR__)) . '/migrations/', // path to migrations directory
        //  'viewsDir' => '', // default Views
        //  'modulesDir' => '', // default Modules
        //  'controllersDir' => '', // default Controllers
        //  'formsDir' => '', // default Forms
        //  'allow' => '', // IP, by default restrict application use only on 127.0.0.1
        //  'baseController' => [], // default
        //  'baseModel' => [], // default
        //  'baseForm' => [], // default
        //  'baseModule' => '', // default
        //  'baseRoute' => '' // default empty
    )
));
