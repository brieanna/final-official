<?php

require __DIR__.'/../../domain/message.php';

class DomainMessageTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     * BRIE :)
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCreateMessageEmpty()
    {
        $message = new \Domain\message();

        // test $message set
        $this->assertNotEmpty($message);

        // test nothing set
        $this->assertEmpty($message->getMessageiD());
        $this->assertEmpty($message->getMessageText());
        $this->assertEmpty($message->getMessageDateTime());
        $this->assertEmpty($message->getRoomUserID());

        // set the things
        $message->MessageID(3);
        $message->MessageText("text test");
        $message->MessageDateTime('08/12/2017');
        $message->RoomUserID(2);

        // test things are set correctly
        $this->assertNotEmpty($message->getMessageiD());
        $this->assertNotEmpty($message->getMessageDateTime());
        $this->assertNotEmpty($message->getRoomUserID());
    }

    // tests
    public function testCreateMessageEquals()
    {
        $message = new \Domain\message();

        // test $message set
        $this->assertNotEmpty($message);

        // test nothing set
        $this->assertNotEquals(3, $message->getMessageID());
        $this->assertNotEquals("text test", $message->getMessageText());
        $this->assertNotEquals('08/12/2017', $message->getMessageDateTime());
        $this->assertNotEquals(2, $message->getRoomUserID());

        // set the things
        $message->MessageID(3);
        $message->MessageText("text test");
        $message->MessageDateTime('08/12/2017');
        $message->RoomUserID(2);

        // test things are set correctly
        $this->assertEquals(3, $message->getMessageID());
        $this->assertEquals("text test", $message->getMessageText());
        $this->assertEquals('08/12/2017', $message->getMessageDateTime());
        $this->assertEquals(2, $message->getRoomUserID());
    }
}