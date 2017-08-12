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
    protected $messageText;
    protected $messageDatetime;
    protected $roomUserID;

    public function MessageID($id) {
        $this->messageID = $id;
        return $this;
    }

    public function getMessageID(){
        return $this->messageID;
    }

    public function MessageText($txt) {
        $this->messageText = $txt;
        return $this;
    }

    public function getMessageText(){
        return $this->messageText;
    }

    public function MessageDateTime($date){
        $this->messageDatetime = $date;
        return $this;
    }

    public function getMessageDateTime(){
        return $this->messageDatetime;
    }

    public function RoomUserID($id) {
        $this->roomUserID = $id;
        return $this;
    }

    public function getRoomUserID(){
        return $this->roomUserID;
    }

}