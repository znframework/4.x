<?php namespace ZN\Image\Exception;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Exception;

class ImageNotFoundException extends Exception
{
    const lang = 
    [
        'en' => '`%` file could not be found!',
        'tr' => '`%` dosyası bulunamadı!'
    ];
}
