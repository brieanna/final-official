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

    public function MessageText($txt) {
        $this->messageText = $txt;
        return $this;
    }

    public function MessageDateTime($date){
        $this->messageDatetime = $date;
        return $this;
    }

    public function roomUserID($id) {
        $this->roomUserID = $id;
        return $this;
    }

}