<?php

namespace App\Tests;

use App\Entity\SkillLevel;
use PHPUnit\Framework\TestCase;

class SkillLevelUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $skillLevel = new SkillLevel();

        $skillLevel->setName('junior');
                

        $this->assertTrue($skillLevel->getName() === 'junior');
    }

    public function testIsFalse()
    {
        $skillLevel = new SkillLevel();

        $skillLevel->setName('junior');

        $this->assertFalse($skillLevel->getName() === 'senior');
    }

    public function testIsEmpty()
    {
        $skillLevel = new SkillLevel();

        $this->assertEmpty($skillLevel->getName());
    }
}
