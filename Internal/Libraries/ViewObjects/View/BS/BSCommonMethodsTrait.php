<?php namespace ZN\ViewObjects\View;

use ZN\ViewObjects\View\BS\Properties;

trait BSCommonMethodsTrait
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Type
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type = NULL
    //
    //--------------------------------------------------------------------------------------------------------
    public function type(String $type = NULL) : InternalBS
    {
        Properties::$type = $type;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Class
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $class = NULL
    //
    //--------------------------------------------------------------------------------------------------------
    public function class(String $class = NULL) : InternalBS
    {
        Properties::$class = $class;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Size
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $size = NULL
    //
    //--------------------------------------------------------------------------------------------------------
    public function size(String $size = NULL) : InternalBS
    {
        Properties::$size = $size;

        return $this;
    }
}