<?php

namespace app\controllers;
class HomeController
{
    private $data;
    public function __construct($data = 'Добро пожаловать!')
    {
        $this->data = $data;
        echo $this->data;
    }
}
