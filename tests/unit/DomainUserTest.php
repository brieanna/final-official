<?php


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
    public function testCreateUser()
    {
        $user = new \Domain\user();

        $user->UserID(1);
        $user->UserEmail("fake@email.com");
        $user->UserName("fakename");
        $user->UserActive(1);

        $this->assertequals(1, $user->getUserID);
        assertTrue($id, 1);
        assertTrue($email, "fake@email.com");
        assertTrue($name, "fakename");
        assertTrue($active, 1);


    }
}