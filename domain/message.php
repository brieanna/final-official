<?php
namespace Domain;
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 8/8/17
 * Time: 8:42 PM
 */
class message
{
    protected $messageID;
    protected $roomID;
    protected $userID;
    protected $message;

    public function MessageID($id) {
        $this->messageID = $id;
        return $this;
    }

    public function RoomID($id) {
        $this->roomID = $id;
        return $this;
    }

    public function UserID($id) {
        $this->userID = $id;
        return $this;
    }

    public function Message($message) {
        $this->message = $message;
        return this;
    }
}