<?php

namespace App\Tests;

use App\Entity\Technology;
use PHPUnit\Framework\TestCase;

class TechnologyUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $technology = new Technology();

        $technology->setName('PHP')
                    ->setLogo('php.png');
                

        $this->assertTrue($technology->getName() === 'PHP');
        $this->assertTrue($technology->getLogo() === 'php.png');
    }

    public function testIsFalse()
    {
        $technology = new Technology();

        $technology->setName('PHP')
                    ->setLogo('php.png');
                

        $this->assertFalse($technology->getName() === 'Ruby');
        $this->assertFalse($technology->getLogo() === 'ruby.png');
    }

    public function testIsEmpty()
    {
        $technology = new Technology();

        $this->assertEmpty($technology->getName());
        $this->assertEmpty($technology->getLogo());
    }
}
