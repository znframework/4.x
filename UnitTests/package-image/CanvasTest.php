<?php namespace ZN\Image;

use GD;

class CanvasTest extends Test\GDExtends
{
    public function testCanvasReal()
    {
        GD::canvas(300, 300, 'white', true)->generate('png');
    }
}