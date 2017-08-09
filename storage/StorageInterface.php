<?php
namespace Storage;
/**
 * Created by PhpStorm.
 * User: brie
 * Date: 8/8/17
 * Time: 9:08 PM
 */

interface StorageInterface {
    public function Count();
    public function Create($item);
    public function Read($id);
    public function ReadAll();
    public function Update($id, $values);
    public function Delete($id);
}
