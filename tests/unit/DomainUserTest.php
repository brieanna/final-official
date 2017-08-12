<?php

require __DIR__.'/../../domain/user.php';

class DomainUserTest extends \Codeception\Test\Unit
{
    /**
     * Created by PhpStorm.
     * User: brie
     * Date: 8/12/17
     * Time: 12:12 PM
     */

    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateUserEmpty()
    {
        $user = new \Domain\user();

        // test $user set
        $this->assertNotEmpty($user);

        // test nothing set
        $this->assertEmpty($user->getUserID());
        $this->assertEmpty($user->getUserEmail());
        $this->assertEmpty($user->getUserName());
        $this->assertEmpty($user->getUserActive());

        // set the things
        $user->UserID(1);
        $user->UserEmail("fake@email.com");
        $user->UserName("fakename");
        $user->UserActive(1);

        // test set correctly
        $this->assertNotEmpty($user->getUserID());
        $this->assertNotEmpty($user->getUserEmail());
        $this->assertNotEmpty($user->getUserName());
        $this->assertNotEmpty($user->getUserActive());
    }

    public function testCreateUserEquals()
    {
        $user = new \Domain\user();

        // test $user set
        $this->assertNotEmpty($user);

        // test nothing set
        $this->assertNotEquals(1, $user->getUserID());
        $this->assertNotEquals("fake@email.com", $user->getUserEmail());
        $this->assertNotEquals("fakename", $user->getUserName());
        $this->assertNotEquals(1, $user->getUserActive());

        // set the things
        $user->UserID(1);
        $user->UserEmail("fake@email.com");
        $user->UserName("fakename");
        $user->UserActive(1);

        // test set correctly
        $this->assertEquals(1, $user->getUserID());
        $this->assertEquals("fake@email.com", $user->getUserEmail());
        $this->assertEquals("fakename", $user->getUserName());
        $this->assertEquals(1, $user->getUserActive());
    }
}