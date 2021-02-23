<?php

namespace App\Tests;

use App\Entity\Duration;
use PHPUnit\Framework\TestCase;

class DurationUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $duration = new Duration();

        $duration->setName('CDD')
                ->setDuration('6 mois');
                

        $this->assertTrue($duration->getName() === 'CDD');
        $this->assertTrue($duration->getDuration() === '6 mois');
    }

    public function testIsFalse()
    {
        $duration = new Duration();

        $duration->setName('CDD')
                ->setDuration('6 mois');

            $this->assertFalse($duration->getName() === 'stage');
            $this->assertFalse($duration->getDuration() === '');
    }

    public function testIsEmpty()
    {
        $duration = new Duration();

        $this->assertEmpty($duration->getName());
        $this->assertEmpty($duration->getDuration());
    }
}
