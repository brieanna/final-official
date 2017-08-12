<?php

require __DIR__.'/../../domain/roomUser.php';

class DomainRoomUserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateRoomUserEmpty()
    {
        $roomuser = new \Domain\roomUser();

        // test $roomuser was set
        $this->assertNotEmpty($roomuser);

        // test not set yet
        $this->assertEmpty($roomuser->getRoomUserID());
        $this->assertEmpty($roomuser->getUserID());
        $this->assertEmpty($roomuser->getRoomID());
        $this->assertEmpty($roomuser->getAccessToken());
        $this->assertEmpty($roomuser->getRoomUserJoinedDate());

        // set the things
        $roomuser->RoomUserID(7);
        $roomuser->UserID(2);
        $roomuser->RoomID(6);
        $roomuser->AccessToken("you now have access to do the stupid things");
        $roomuser->RoomUserJoinedDate('08/07/09');

        // test the things have been set
        $this->assertNotEmpty($roomuser->getRoomUserID());
        $this->assertNotEmpty($roomuser->getUserID());
        $this->assertNotEmpty($roomuser->getRoomID());
        $this->assertNotEmpty($roomuser->getAccessToken());
        $this->assertNotEmpty($roomuser->getRoomUserJoinedDate());
    }

    public function testCreateRoomUserEquals()
    {
        $roomuser = new \Domain\roomUser();

        // test $roomuser was set
        $this->assertNotEmpty($roomuser);

        // test not set yet
        $this->assertNotEquals(7, $roomuser->getRoomUserID());
        $this->assertNotEquals(2, $roomuser->getUserID());
        $this->assertNotEquals(6, $roomuser->getRoomID());
        $this->assertNotEquals("you now have access to do the stupid things", $roomuser->getAccessToken());
        $this->assertNotEquals('08/07/09', $roomuser->getRoomUserJoinedDate());

        // set the things
        $roomuser->RoomUserID(7);
        $roomuser->UserID(2);
        $roomuser->RoomID(6);
        $roomuser->AccessToken("you now have access to do the stupid things");
        $roomuser->RoomUserJoinedDate('08/07/09');

        // test the things have been set
        $this->assertEquals(7, $roomuser->getRoomUserID());
        $this->assertEquals(2, $roomuser->getUserID());
        $this->assertEquals(6, $roomuser->getRoomID());
        $this->assertEquals("you now have access to do the stupid things", $roomuser->getAccessToken());
        $this->assertEquals('08/07/09', $roomuser->getRoomUserJoinedDate());
    }
}