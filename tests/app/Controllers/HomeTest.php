<?php

//use Controllers;

class HomeTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
	$uri = new Controllers\Home;
	$this->assertTrue($uri->justATest());
    }
}
