<?php namespace ZN\IndividualStructures;

interface ISInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------
    // timeZone() -> 5.2.6
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $timezone
    //
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function timeZone(String $timezone) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isPhpVersion()
    //--------------------------------------------------------------------------------------------------
    //
    // İşlev: Parametrenin geçerli php sürümü olup olmadığını kontrol eder.
    // Parametreler: $version => Geçerliliği kontrol edilecek veri.
    // Dönen Değerler: Geçerli sürümse true değilse false değerleri döner.
    //
    //--------------------------------------------------------------------------------------------------
    public static function phpVersion(String $version = '5.2.4');

    //--------------------------------------------------------------------------------------------------
    // isImport()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $path
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function import(String $path) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isUrl()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $url
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function url(String $url) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isEmail()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $email
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function email(String $email) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isChar()
    //--------------------------------------------------------------------------------------------------
    //
    // @param mixed $str
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function char($str) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isRealNumeric()
    //--------------------------------------------------------------------------------------------------
    //
    // @param numeric $num = 0
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function realNumeric($num = 0) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isDeclaredClass()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $class
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function declaredClass(String $class) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isHash()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $type
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function hash(String $type) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isCharset()
    //--------------------------------------------------------------------------------------------------
    //
    // @param string $charset
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function charset(String $charset) : Bool;

    //--------------------------------------------------------------------------------------------------
    // isArray
    //--------------------------------------------------------------------------------------------------
    //
    // @param mixed $array
    //
    // @return Bool
    //
    //--------------------------------------------------------------------------------------------------
    public static function array($array) : Bool;
}