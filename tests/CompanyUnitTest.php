<?php

namespace App\Tests;

use App\Entity\Company;
use PHPUnit\Framework\TestCase;

class CompanyUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $company = new Company();

        $company->setName('company')
                ->setAddress('address')
                ->setEmail('true@test.com')
                ->setWebsite('company.com')
                ->setActivityArea('IT')
                ->setDescription('some text');
                

        $this->assertTrue($company->getName() === 'company');
        $this->assertTrue($company->getAddress() === 'address');
        $this->assertTrue($company->getEmail() === 'true@test.com');
        $this->assertTrue($company->getWebsite() === 'company.com');
        $this->assertTrue($company->getActivityArea() === 'IT');
        $this->assertTrue($company->getDescription() === 'some text');
    }

    public function testIsFalse()
    {
        $company = new Company();

        $company->setName('company')
                ->setAddress('address')
                ->setEmail('true@test.com')
                ->setWebsite('company.com')
                ->setActivityArea('IT')
                ->setDescription('some text');

            $this->assertFalse($company->getName() === 'false');
            $this->assertFalse($company->getAddress() === 'falseAddress');
            $this->assertFalse($company->getEmail() === 'false@test.com');
            $this->assertFalse($company->getWebsite() === 'falsecompany.com');
            $this->assertFalse($company->getActivityArea() === 'maraîchage');
            $this->assertFalse($company->getDescription() === 'some false text');
    }

    public function testIsEmpty()
    {
        $company = new Company();

        $this->assertEmpty($company->getName());
        $this->assertEmpty($company->getAddress());
        $this->assertEmpty($company->getWebsite());
        $this->assertEmpty($company->getEmail());
        $this->assertEmpty($company->getWebsite());
        $this->assertEmpty($company->getActivityArea());
        $this->assertEmpty($company->getDescription());
    }
}
