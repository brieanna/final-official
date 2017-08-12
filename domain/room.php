<?php
namespace Domain;
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 8/8/17
 * Time: 8:42 PM
 */
class room
{
    protected $roomID;
    protected $roomName;
    protected $roomActive;
    protected $roomCreatedDate;
    protected $roomLastPostDate;

    public function RoomID($id) {
        $this->roomID = $id;
        return this;
    }

    public function RoomName($name) {
        $this->roomName = $name;
        return this;
    }

    public function RoomActive($active) {
        $this->roomActive = $active;
        return this;
    }

    public function RoomCreatedDate($date){
        $this->roomCreatedDate = $date;
        return this;
    }

    public function RoomLastPostDate($date){
        $this->roomCreatedDate = $date;
        return this;
    }
}