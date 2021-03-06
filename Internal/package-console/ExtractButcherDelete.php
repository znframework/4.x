<?php namespace ZN\Console;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Butcher;

/**
 * @command extract-butcher-delete
 * @description extract-butcher-delete [all|{name}] [title|lower|slug|normal|{name}]
 */
class ExtractButcherDelete
{
    /**
     * Magic constructor
     * 
     * @param string $command
     * @param array  $parameters
     * 
     * @return void
     */
    public function __construct($command, $parameters)
    {   
        new Result((new Butcher)->extractDelete
        (
            $command       ?? 'all', 
            $parameters[0] ?? 'title', 
            $parameters[1] ?? 'project'
        ));
    }
}