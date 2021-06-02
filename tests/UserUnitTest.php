<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user   ->setEmail('true@test.com')
                ->setPassword('password')
                ->setUsername('username');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getUsername() === 'username');              
    }

    public function testIsFalse()
    {
        $user = new User();

        $user   ->setEmail('true@test.com')
                ->setPassword('password')
                ->setUsername('username');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getUsername() === 'false');

    }

    public function testIsEmpty()
    {
        $user = new User();
        
        $user ->setPassword('');

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getUsername());
                
    }
}
