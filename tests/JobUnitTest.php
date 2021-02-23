<?php

namespace App\Tests;

use App\Entity\Job;
use PHPUnit\Framework\TestCase;

class JobUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $job = new Job();

        $job->setTitle('dev fullstack')
            ->setMethodology('agile')
            ->setJobDescription('super mega taf de la mort')
            ->setJobMissions('babyfoot, paintball et LOL')
            ->setCandidateProfile('bon')
            ->setMiscellaneous('rien')
            ->setLocation('ici');
                

        $this->assertTrue($job->getTitle() === 'dev fullstack');
        $this->assertTrue($job->getMethodology() === 'agile');
        $this->assertTrue($job->getJobDescription() === 'super mega taf de la mort');
        $this->assertTrue($job->getJobMissions() === 'babyfoot, paintball et LOL');
        $this->assertTrue($job->getCandidateProfile() === 'bon');
        $this->assertTrue($job->getMiscellaneous() === 'rien');
        $this->assertTrue($job->getLocation() === 'ici');
    }

    public function testIsFalse()
    {
        $job = new Job();

        $job->setTitle('dev fullstack')
            ->setMethodology('agile')
            ->setJobDescription('super mega taf de la mort')
            ->setJobMissions('babyfoot, paintball et LOL')
            ->setCandidateProfile('bon')
            ->setMiscellaneous('rien')
            ->setLocation('ici');

        $this->assertFalse($job->getTitle() === 'dev false');
        $this->assertFalse($job->getMethodology() === 'false');
        $this->assertFalse($job->getJobDescription() === 'super false taf de la mort');
        $this->assertFalse($job->getJobMissions() === 'babyfoot, paintball et false');
        $this->assertFalse($job->getCandidateProfile() === 'false');
        $this->assertFalse($job->getMiscellaneous() === 'rifalseen');
        $this->assertFalse($job->getLocation() === 'false');
    }

    public function testIsEmpty()
    {
        $job = new Job();

        $this->assertEmpty($job->getTitle());
        $this->assertEmpty($job->getMethodology());
        $this->assertEmpty($job->getJobDescription());
        $this->assertEmpty($job->getJobMissions());
        $this->assertEmpty($job->getCandidateProfile());
        $this->assertEmpty($job->getMiscellaneous());
        $this->assertEmpty($job->getLocation());
    }
}
