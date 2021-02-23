<?php

namespace App\Tests;

use App\Entity\SocialMedia;
use PHPUnit\Framework\TestCase;

class SocialMediaUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $socialMedia = new SocialMedia();

        $socialMedia->setType('twitter')
                    ->setUrl('https://twitter.com/Casimir');
                

        $this->assertTrue($socialMedia->getType() === 'twitter');
        $this->assertTrue($socialMedia->getUrl() === 'https://twitter.com/Casimir');
    }

    public function testIsFalse()
    {
        $socialMedia = new SocialMedia();

        $socialMedia->setType('twitter')
                    ->setUrl('https://twitter.com/Casimir');

            $this->assertFalse($socialMedia->getType() === 'kwitter');
            $this->assertFalse($socialMedia->getUrl() === 'https://twitter.com/PopKhorne');
    }

    public function testIsEmpty()
    {
        $socialMedia = new SocialMedia();

        $this->assertEmpty($socialMedia->getType());
        $this->assertEmpty($socialMedia->getUrl());
    }
}
