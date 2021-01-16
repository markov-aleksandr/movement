<?php


namespace Core;


class Model
{
    protected $dataConnect;

    public function __construct()
    {
        $this->dataConnect = new PDO("mysql:host=localhost;dbname=Library;charset=utf8", 'root', 'root');
    }
}
