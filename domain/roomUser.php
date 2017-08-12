<?php
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 8/12/17
 * Time: 11:54 AM
 */

namespace Domain;


class roomUser
{
    protected $roomUserID;
    protected $userID;
    protected $roomID;
    protected $accessToken;
    protected $roomUserJoinedDate;

    public function RoomUserID($id){
        $this->roomUserID = $id;
        return $this;
    }

    public function getRoomUserID(){
        return $this->roomUserID;
    }

    public function UserID($id){
        $this->userID = $id;
        return $this;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function RoomID($id){
        $this->roomID = $id;
        return $this;
    }

    public function getRoomID(){
        return $this->roomID;
    }

    public function AccessToken($token){
        $this->accessToken = $token;
        return $this;
    }

    public function getAccessToken(){
        return $this->accessToken;
    }

    public function RoomUserJoinedDate($date){
        $this->roomUserJoinedDate = $date;
        return $this;
    }

    public function getRoomUserJoinedDate(){
        return $this->roomUserJoinedDate;
    }
}