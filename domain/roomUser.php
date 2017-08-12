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

    public function UserID($id){
        $this->userID = $id;
        return $this;
    }

    public function RoomID($id){
        $this->roomID = $id;
        return $this;
    }

    public function AccessToken($token){
        $this->accessToken = $token;
        return $this;
    }

    public function RoomUserJoinedDate($date){
        $this->roomUserJoinedDate = $date;
        return $this;
    }
}