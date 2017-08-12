<?php

require __DIR__.'/../../domain/room.php';

class DomainRoomTest extends \Codeception\Test\Unit
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
    public function testCreateRoomEmpty()
    {
        $room = new \Domain\room();

        // test $room set
        $this->assertNotEmpty($room);

        // test not set yet
        $this->assertEmpty($room->getRoomID());
        $this->assertEmpty($room->getRoomName());
        $this->assertEmpty($room->getRoomActive());
        $this->assertEmpty($room->getRoomCreatedDate());
        $this->assertEmpty($room->getRoomLastPostDate());

        // set the things
        $room->RoomID(5);
        $room->RoomName("dumbname");
        $room->RoomActive(1);
        $room->roomCreatedDate('08/13/2017');
        $room->RoomLastPostDate('08/11/2017');

        // test the things have been set correctly
        $this->assertNotEmpty($room->getRoomID());
        $this->assertNotEmpty($room->getRoomName());
        $this->assertNotEmpty($room->getRoomActive());
        $this->assertNotEmpty($room->getRoomCreatedDate());
        $this->assertNotEmpty($room->getRoomLastPostDate());
    }

    public function testCreateRoomEquals()
    {
        $room = new \Domain\room();

        // test $room set
        $this->assertNotEmpty($room);

        // test not set yet
        $this->assertNotEquals(5, $room->getRoomId());
        $this->assertNotEquals("dumbname", $room->getRoomName());
        $this->assertNotEquals(1, $room->getRoomActive());
        $this->assertNotEquals('08/13/2017', $room->getRoomCreatedDate());
        $this->assertNotEquals('08/11/2017', $room->getRoomLastPostDate());

        // set the things
        $room->RoomID(5);
        $room->RoomName("dumbname");
        $room->RoomActive(1);
        $room->roomCreatedDate('08/13/2017');
        $room->RoomLastPostDate('08/11/2017');

        // test the things have been set correctly
        $this->assertEquals(5, $room->getRoomId());
        $this->assertEquals("dumbname", $room->getRoomName());
        $this->assertEquals(1, $room->getRoomActive());
        $this->assertEquals('08/13/2017', $room->getRoomCreatedDate());
        $this->assertEquals('08/11/2017', $room->getRoomLastPostDate());
    }
}