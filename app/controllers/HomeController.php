<?php
namespace app\controllers;
class HomeController
{
    private $date;
     //public function __construct($date)
     //{
     //    $this->date = $date;
     //}

     public function index1()
     {
         echo $_ENV['DB_HOST'];
     }
    public function index2()
    {
        echo $_ENV['DB_NAME'];
    }
}
