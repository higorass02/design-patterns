<?php

namespace App\Http\Controllers\DesignPatterns\Singleton;

class db  //Class name
{
    private static $connection = NULL;  // Presense of connection variable
    protected function __construct(){}  //prevent outside instantiation of db class
    public static function connect($host,$databasename,$username,$password)  //static function accepting host,dbname,username,password Arguments
    {
    if(is_null(self::$connection)) //checks the $connection is set to null
        {
            self::$connection = new PDO("mysql:host=$host;dbname=$databasename",$username,$password); //Instantiation of PDO driver class (Predefined)
            
        }

        return self::$connection; //return statement
    }

    private function __clone(){} //prevent copy of this object
    private function __wakeup(){} //prevent outside unserialization 

}

$database = db::connect($host, $databasename, $username, $password); //Instantiation of db class without new operator
