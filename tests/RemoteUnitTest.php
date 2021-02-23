<?php

namespace App\Tests;

use App\Entity\Remote;
use PHPUnit\Framework\TestCase;

class RemoteUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $remote = new Remote();

        $remote->setType('full remote');
                

        $this->assertTrue($remote->getType() === 'full remote');
    }

    public function testIsFalse()
    {
        $remote = new Remote();

        $remote->setType('full remote');
                

        $this->assertFalse($remote->getType() === 'nope');
    }

    public function testIsEmpty()
    {
        $remote = new Remote();
                

        $this->assertEmpty($remote->getType());
    }
}
