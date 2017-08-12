<?php
namespace Domain;
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 8/8/17
 * Time: 8:42 PM
 */
class user
{
    protected $userID;
    protected $userName;
    protected $userEmail;
    protected $userActive;

    public function UserID($id) {
        $this->userID = $id;
        return $this;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function UserName($name) {
        $this->userName = $name;
        return $this;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function UserEmail($email) {
        $this->userEmail = $email;
        return $this;
    }

    public function getUserEmail(){
        return $this->userEmail;
    }

    public function UserActive($active) {
        $this->userActive = $active;
        return $this;
    }

    public function getUserActive(){
        return $this->userActive;
    }
}