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
        return $this;
    }

    public function getRoomID(){
        return $this->roomID;
    }

    public function RoomName($name) {
        $this->roomName = $name;
        return $this;
    }

    public function getRoomName(){
        return $this->roomName;
    }

    public function RoomActive($active) {
        $this->roomActive = $active;
        return $this;
    }

    public function getRoomActive(){
        return $this->roomActive;
    }

    public function RoomCreatedDate($date){
        $this->roomCreatedDate = $date;
        return $this;
    }

    public function getRoomCreatedDate(){
        return $this->roomCreatedDate;
    }

    public function RoomLastPostDate($date){
        $this->roomLastPostDate = $date;
        return $this;
    }

    public function getRoomLastPostDate(){
        return $this->roomLastPostDate;
    }
}