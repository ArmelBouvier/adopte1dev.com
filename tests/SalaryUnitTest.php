<?php

namespace App\Tests;

use App\Entity\Salary;
use PHPUnit\Framework\TestCase;

class SalaryUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $salary = new Salary();

        $salary->setFrequency('mission')
                ->setAmount(4500);
                

        $this->assertTrue($salary->getFrequency() === 'mission');
        $this->assertTrue($salary->getAmount() === 4500);
    }

    public function testIsFalse()
    {
        $salary = new Salary();

        $salary->setFrequency('mission')
                ->setAmount(4500);
                

        $this->assertFalse($salary->getFrequency() === 'année');
        $this->assertFalse($salary->getAmount() === 500);
    }

    public function testIsEmpty()
    {
        $salary = new Salary();

        $this->assertEmpty($salary->getFrequency());
        $this->assertEmpty($salary->getAmount());
    }
}
