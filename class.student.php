<?php
class Student
{
    const ID = 6512122290;
    public $school = "LRU";
    public function info()
    {
        $data = self::ID . " : " . $this->school;
        return $data;
    }
}
