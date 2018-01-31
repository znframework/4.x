<?php return
[
    //--------------------------------------------------------------------------------------------------
    // Database
    //--------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : Copyright (c) 2012-2016, ZN Framework
    //
    //--------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // Migraion Table
    //--------------------------------------------------------------------------------------------------
    //
    // Migration işlemlerinin yapılacağı tablo adı.
    //
    //--------------------------------------------------------------------------------------------------
    'migration' =>
    [
        'table' => 'migrations'
    ],

    //--------------------------------------------------------------------------------------------------
    // Database
    //--------------------------------------------------------------------------------------------------
    //
    // Database ile ilgili ayarlar.
    //
    //--------------------------------------------------------------------------------------------------
    'database' =>
    [
        //----------------------------------------------------------------------------------------------
        // Driver
        //----------------------------------------------------------------------------------------------
        //
        // Drivers: odbc, mysqli, pdo(Only MySQL), oracle, postgres, sqlite, sqlserver
        //
        //----------------------------------------------------------------------------------------------
        'driver' => 'mysqli',

        //----------------------------------------------------------------------------------------------
        // Host
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Database için host seçimidir. Varsayılan:localhost
        //
        //----------------------------------------------------------------------------------------------
        'host' => 'localhost',

        //----------------------------------------------------------------------------------------------
        // Database
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Database ismi. Varsayılan:test
        //
        //----------------------------------------------------------------------------------------------
        'database' => 'test',

        //----------------------------------------------------------------------------------------------
        // User
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Database kullanıcı ismi. Varsayılan:root
        //
        //----------------------------------------------------------------------------------------------
        'user' => 'root',

        //----------------------------------------------------------------------------------------------
        // Password
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Database kullanıcı şifresi. Varsayılan:empty
        //
        //----------------------------------------------------------------------------------------------
        'password' => '',

        //----------------------------------------------------------------------------------------------
        // Dsn
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Özellikle PDO alt sürücüleri için bağlantılar oluşturmak için
        // kullanılan bağlantı ayar kümesidir. Varsayılan:empty
        //
        // Using Databases
        // 1-Oracle
        // 2-ODBC
        // 3-Postgres
        // 4-PDO and Sub Drivers
        //
        //----------------------------------------------------------------------------------------------
        'dsn' => '',

        //----------------------------------------------------------------------------------------------
        // Server
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Server bağlantısı gerektiren sürücüler için kullanılan ayardır.
        // Varsayılan:empty
        //
        // Using Databases
        // 1-ODBC
        // 2-SQLServer
        //
        //----------------------------------------------------------------------------------------------
        'server' => '',

        //----------------------------------------------------------------------------------------------
        // Port
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Port bağlantısı gerektiren sürücüler için kullanılan ayardır.
        // Varsayılan:empty
        //
        // Using Databases
        // 1-Postgres
        // 2-SQLServer
        // 3-PDO -> MySQL
        //
        //----------------------------------------------------------------------------------------------
        'port' => '',

        //----------------------------------------------------------------------------------------------
        // Cache Driver
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Ön bellekleme yapılacaksa belleklemenin ön tanımlı hangi cache sürücüsü ile
        // yapılacağı belirtilir.
        //
        // Kullanılabilir Seçenekler: apcu, apc, memcache, wincache, file, redis,
        //
        //----------------------------------------------------------------------------------------------
        'cacheDriver' => 'file',

        //----------------------------------------------------------------------------------------------
        // Query Log
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Database sorgularının loglanması için kullanılır.
        //
        //----------------------------------------------------------------------------------------------
        'queryLog' => false,

        //----------------------------------------------------------------------------------------------
        // Pconnect
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Pconnect bağlantısı destekleyen sürücüler için kullanılan ayardır.
        // Varsayılan:false
        //
        // Using Databases
        // 1-Oracle
        // 2-ODBC
        // 3-Postgres
        // 4-SQLITE
        //
        //----------------------------------------------------------------------------------------------
        'pconnect' => false,

        //----------------------------------------------------------------------------------------------
        // Encode
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Encode şifreleme bilgisi gerektiren sürücüler için kullanılan ayardır.
        // Varsayılan:false
        //
        // Using Databases
        // 1-SQLServer
        //
        //----------------------------------------------------------------------------------------------
        'encode' => false,

        //----------------------------------------------------------------------------------------------
        // Prefix
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Tablo ön eki bilgisi kullanabilen sürücüler için kullanılan ayardır.
        // Varsayılan:empty
        //
        //----------------------------------------------------------------------------------------------
        'prefix' => '',

        //----------------------------------------------------------------------------------------------
        // Charset
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Karakter seti bilgisi kullanabilen sürücüler için kullanılan ayardır.
        // Varsayılan:utf8
        //
        //----------------------------------------------------------------------------------------------
        'charset' => 'utf8',

        //----------------------------------------------------------------------------------------------
        // Collation
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Karakter grubu bilgisi kullanabilen sürücüler için kullanılan ayardır.
        // Varsayılan:utf8_general_ci
        //
        // Using Databases
        // 1-MySQLi
        // 2-PDO -> MySQL
        //
        //----------------------------------------------------------------------------------------------
        'collation' => 'utf8_general_ci',

        //----------------------------------------------------------------------------------------------
        // Different Connection
        //----------------------------------------------------------------------------------------------
        //
        // Genel Kullanım: Farklı veya birden fazla veritabanı bağlantısı oluşturumak için
        // kullanılmaktadır. Bu ayar sayesinden aynı anda çoklu bağlantı sağlamış olacaksınız.
        //
        // Örnek Kullanım
        // array
        // (
        //     'ornek1VT' => array('database' => 'ornek1'),
        //     'ornek2VT' => array('database' => 'ornek2')
        // )
        //
        //----------------------------------------------------------------------------------------------
        'differentConnection' => []
    ]
];